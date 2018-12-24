<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\PhotoGroup
 *
 * @property int $id
 * @property int $user_id
 * @property string $group_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\PhotoGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\PhotoGroup whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\PhotoGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\PhotoGroup whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\PhotoGroup whereUserId($value)
 * @mixin \Eloquent
 */
class PhotoGroup extends Model
{
    //
    /**
     * the table assoicated with the model
     *
     * @var string
     */
    protected $table='photo_groups';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id','group_name'
    ];

    /**
     * the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected  $hidden = [];
}
