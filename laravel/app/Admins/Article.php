<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Article
 *
 * @property int $id
 * @property int $user_id
 * @property int $article_category_id
 * @property string $article_name
 * @property string $article_content
 * @property int $scan_account
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Admins\ArticleCategory $articleCategory
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereArticleCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereArticleContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereArticleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereScanAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Article whereUserId($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'article_category_id','article_name','article_content','scan_account'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function articleCategory()
    {
        return $this->belongsTo(ArticleCategory::class,'article_category_id');
    }
}
