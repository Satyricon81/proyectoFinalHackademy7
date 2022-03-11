<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index() {
        
        $ads = Ad::where('is_accepted', true)
        ->orderBy('created_at', 'desc')
        ->take(4)
        ->get();         
        return view('welcome', compact('ads'));
        
    }
    
    public function aboutUs() {
        return view('aboutUs');
    }
    
    public function contact() {
        return view('contact');
    }
    
    public function adsByCategory($name, $category_id){
        
        $category = Category::find($category_id);     
        $ads = $category->ads()         
        ->where('is_accepted', true)         
        ->orderBy('created_at', 'desc')         
        ->paginate(4);         
        return view('ads', compact('category', 'ads'));
    }

    public function adsByUser($name, $user_id){
        
        $user = User::find($user_id);     
        $ads = $user->ads()         
        ->where('is_accepted', true)         
        ->orderBy('created_at', 'desc')         
        ->paginate(4);         
        return view('user', compact('user', 'ads'));
    }
    
    public function locale($locale) {
        session()->put('locale', $locale);
        return redirect()->back();   
    }
    
}
