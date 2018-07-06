<?php

namespace App\Admins;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'telephone','password','login_amount','failed_amount','is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function info()
    {
        return $this -> hasOne(UserInfo::class,'user_id');
    }

    public function answer()
    {
        return $this->hasMany(Answer::class,'user_id');
    }
}
