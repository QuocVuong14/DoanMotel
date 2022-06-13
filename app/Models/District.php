<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table= 'districts';

    protected $guarded = [
    ];

    public function Ward() {
        return $this->hasMany(Ward::class, 'ward_id');
    }
    public function Address() {
        return $this->belongsTo(Address::class, 'district_id');
    }
}
