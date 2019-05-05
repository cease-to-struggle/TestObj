<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\FriendGroup
 *
 * @property int $id
 * @property int $user_id
 * @property string $group_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\FriendGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\FriendGroup whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\FriendGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\FriendGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\FriendGroup whereUserId($value)
 * @mixin \Eloquent
 */
class FriendGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'friend_groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'user_id','group_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];



}
