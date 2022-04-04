<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\User;
use App\Models\AdImage;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;
    use Searchable;
    
    public function user(){
        
        return $this->belongsTo(User::class);
    }
    
    public function category(){
        return $this->belongsto(Category::class);
    }
    
    static public function ToBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }
    
    
    public function images()
    {
        return $this->HasMany(AdImage::class);
    }
    
    public function toSearchableArray () {
        //$array = $this->toArray();
        
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$this->category->name,
            'other'=>'ads ad',
        ];
        
        return $array;
    }
}
