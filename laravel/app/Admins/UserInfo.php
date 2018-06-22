<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'realname', 'sex','birthday','question_id','answer','address_province','address_city','address_region'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function user()
    {
    	return $this->belongsto(User::class);
    }

    public function question()
    {
    	return $this->belongsTo(SecurityQuestion::class);
    }
}
