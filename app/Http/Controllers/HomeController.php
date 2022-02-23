<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Illuminate\Http\Request;
use App\Http\Requests\AdRequest;
use Illuminate\Support\Facades\Bus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeLabelImage;
use App\Jobs\GoogleVisionSafeSearchImage;


class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    
    public function newAd(Request $request) 
    {   $uniqueSecret = $request->old(
        'uniqueSecret',
        base_convert(sha1(uniqid(mt_rand())), 16, 36)
    );
    
    return view('newAd', compact('uniqueSecret')); 
}

public function createAd(AdRequest $request){
    $a = new Ad();
    $a->title = $request->input('title');
    $a->description = $request->input('description');
    $a->category_id = $request->input('category_id');
    $a->price = $request->input('price');
    $a->user_id = Auth::id();
    $a->save();
    $uniqueSecret = $request->input('uniqueSecret');
    $images = session()->get("images.{$uniqueSecret}", []);
    $removedImages = session()->get("removedImages.{$uniqueSecret}", []);
    $images = array_diff($images, $removedImages);
    
    foreach($images as $image){
        $i = new AdImage;
        $fileName = basename($image);
        $newFilePath = "public/ads/{$a->id}/{$fileName}";
        Storage::move($image,$newFilePath); 


        $i->file = $newFilePath;
        $i->ad_id = $a->id;
        $i->save();
        
        Bus::chain([
            new GoogleVisionSafeSearchImage($i->id),
            new GoogleVisionSafeLabelImage($i->id),
            new GoogleVisionRemoveFaces($i->id),
            new ResizeImage($i->file, 300,150)
])->dispatch();

    }
        
    File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
    return redirect()->route('welcome')->with('ad.create.success','Anuncio creado con exito, será revisado en la mayor brevedad posible'); 
}

public function details($id) 
{  
    $ad = Ad::findOrFail($id);
    return view("detalle",["ad"=>$ad]);
}

public function uploadImages(Request $request)
{
    $uniqueSecret = $request->input('uniqueSecret');
    $filePath = $request->file('file')->store("public/temp/{$uniqueSecret}");
    dispatch(new ResizeImage($filePath,120,120));
    session()->push("images.{$uniqueSecret}", $filePath);
    
    return response()->json(['id'=>$filePath]);
}

public function removeImages(Request $request)
{       
    $uniqueSecret = $request->input('uniqueSecret');
    $fileName = $request->input('id');
    session()->push("removedImages.{$uniqueSecret}", $fileName);
    Storage::delete($fileName);
    return response()->json('ok');
}

public function getImages(Request $request){
    $uniqueSecret = $request->input('uniqueSecret');
    $images = session()->get("images.{$uniqueSecret}", []);
    $removedImages = session()->get("removedImages.{$uniqueSecret}",[]);
    $images = array_diff($images, $removedImages);
    $data = [];
    foreach($images as $image){
        $data[] = [
            'id' => $image,
            'name'=> basename($image),
            'src' => AdImage::getUrlByFilePath($image, 120, 120),
            'size'=> Storage::size($image),
        ];
        
    }
    return response()->json($data);
}

}
