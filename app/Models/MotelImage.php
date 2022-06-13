<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotelImage extends Model
{
    use HasFactory;
    protected $table= 'motel_image';

    protected $guarded = [
    ];
    public function Image() {
        return $this->hasMany(Image::class,'id', 'image_id');
    }

}
