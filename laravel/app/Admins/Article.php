<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

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
