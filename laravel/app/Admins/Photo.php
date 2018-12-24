<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Photo
 *
 * @property int $id
 * @property int $photo_group_id
 * @property string $s_path
 * @property string $m_path
 * @property string $l_path
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereLPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereMPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo wherePhotoGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereSPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Photo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    //
    /**
     * the table associated with the model
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable=[
        'user_id','photo_group_id','s_path','m_path','l_path'
    ];

    /**
     * the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected $hidden = [];
}
