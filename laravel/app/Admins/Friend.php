<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Friend
 *
 * @property int $id
 * @property int $user_id
 * @property int $friend_id
 * @property int $user_group_id
 * @property int $friend_group_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Admins\FriendGroup $friendGroup
 * @property-read \App\Admins\FriendGroup $userGroup
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereFriendGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereFriendId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereUserGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Friend whereUserId($value)
 * @mixin \Eloquent
 */
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
