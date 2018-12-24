<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Announcement
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $is_release
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereIsRelease($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Announcement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Announcement extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'announcements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content','is_release'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
