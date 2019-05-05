<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Answer
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property string $answer
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Admins\SecurityQuestion $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Answer whereUserId($value)
 * @mixin \Eloquent
 */
class Answer extends Model
{
    /**
     * The table associated with the Model
     *
     * @var array
     */
    protected $table='answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'question_id', 'answer'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function question()
    {
        return $this->belongsTo(SecurityQuestion::class);
    }
}
