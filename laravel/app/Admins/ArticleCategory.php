<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\ArticleCategory
 *
 * @property int $id
 * @property int $user_id
 * @property string $category_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Admins\Article[] $article
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\ArticleCategory whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\ArticleCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\ArticleCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\ArticleCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\ArticleCategory whereUserId($value)
 * @mixin \Eloquent
 */
class ArticleCategory extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function article()
    {
        return $this->hasMany(Article::class,'article_category_id');
    }
}
