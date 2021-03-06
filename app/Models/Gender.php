<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $table= 'genders';

    protected $guarded = [
    ];
    public function Gender() {
        return $this->hasMany(Motel::class, 'gender_id');
    }
}
