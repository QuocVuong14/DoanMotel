<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotelComment extends Model
{
    use HasFactory;
    protected $table= 'motel_comments';

    protected $guarded = [
    ];
    public function comment() {
        return $this->hasMany(Comment::class,'id', 'comment_id');
    }
}
