<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\AdImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdImage extends Model
{
    use HasFactory;
    protected $casts = [
        'labels'=>'array'
    ];
    
    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    public function getUrl($w, $h)
    {
        return AdImage::getUrlByFilePath($this->file, $w, $h); 
    }
    
    static public function getUrlByFilePath($filePath, $w = null, $h = null){
        if(!$w && !$h)
        return Storage::url($filePath);

        $path = dirname($filePath);
        $fileName = basename($filePath);
        
        $file = "{$path}/crop{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }
}
