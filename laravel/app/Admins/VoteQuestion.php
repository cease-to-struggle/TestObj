<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class VoteQuestion extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vote_questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','title', 'question'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];


    public function result()
    {
        return $this->hasMany(VoteResult::class,'vote_id');
    }
}
