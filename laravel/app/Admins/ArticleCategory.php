<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

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
