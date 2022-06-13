<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table= 'addresses';

    protected $guarded = [
    ];
    public function District() {
        return $this->belongsTo(District::class, 'district_id');
    }
    public function Motel() {
        return $this->hasMany(Motel::class, 'address_id');
    }
}
