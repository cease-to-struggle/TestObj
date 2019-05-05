<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\CommentInfo
 *
 * @property int $id
 * @property int $comment_id
 * @property int $article_id
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\CommentInfo whereUserId($value)
 * @mixin \Eloquent
 */
class CommentInfo extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment_id','article_id','user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
