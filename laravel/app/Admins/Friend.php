<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
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


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userGroup(){
        return $this->hasOne(FriendGroup::class,'id','user_group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function friendGroup()
    {
        return $this->hasOne(FriendGroup::class,'id','friend_group_id');
    }

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }
}
