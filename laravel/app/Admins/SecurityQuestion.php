<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\SecurityQuestion
 *
 * @property int $id
 * @property string $question
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\SecurityQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\SecurityQuestion whereQuestion($value)
 * @mixin \Eloquent
 */
class SecurityQuestion extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'security_questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['questions'];

    protected $timestamp = false;

}
