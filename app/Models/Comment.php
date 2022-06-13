<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table= 'comments';

    protected $guarded = [
    ];
//    public function comment() {
//        return $this->belongsTo(Motel::class, 'comment_id');
//    }
    public function motelcomment() {
        return $this->belongsTo(MotelComment::class, 'id','comment_id');
    }
}
