<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motel;
use App\Models\MotelImage;

class Image extends Model
{
    use HasFactory;
    protected $table= 'images';

    protected $guarded = [
    ];
    public function Image() {
        return $this->belongsTo(Motel::class, 'image_id');
    }
    public function motelimage() {
        return $this->belongsTo(MotelImage::class, 'id','image_id');
    }
}
