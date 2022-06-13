<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;


class Motel extends Model
{
    use HasFactory;
    protected $table= 'motels';

    protected $guarded = [
    ];
    public  function gender ()
    {
        return $this->belongsTo(Gender::class,'gender_id');

    }
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function image() {
        return $this->hasMany(Images::class, 'image_id');
    }
    public function motel_image() {
        return $this->belongsTo(MotelImage::class, 'id','motel_id');
    }

    public function address() {
        return $this->hasOne(Address::class,'id','address_id');
    }
    public function rating() {
        return $this->hasMany(Rating::class);
    }

//    public function motel_comment() {
//        return $this->belongsTo(MotelComment::class, 'id','motel_id');
//    }

}
