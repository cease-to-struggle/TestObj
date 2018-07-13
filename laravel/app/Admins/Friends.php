<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'friends';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id', 'friend_id','user_group_id','friend_group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


    public function user(){
        return $this->hasOne(FriendGroups::class,'id','user_group_id');
    }

    public function friend()
    {
        return $this->hasOne(FriendGroups::class,'id','friend_group_id');
    }

}
