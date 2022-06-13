<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


// <!-- Auth Sanctum: https://github.com/anil-sidhu/laravel-sanctum -->
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'fb_id',
        'email_id',
        'email_verified_at',
        'name',
        'email',
        'password',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
      
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','role_user', 'user_id', 'role_id')->withTimestamps();
    }

    public function user_details()
    {
        return $this->hasOne (UserDetail::class,'user_id');
    }


//    public function orders()
//    {
//        return $this->hasMany(Order::class,'user_id');
//    }
//
//    public function carts()
//    {
//        return $this->hasMany(Cart::class,'user_id');
//    }


}
