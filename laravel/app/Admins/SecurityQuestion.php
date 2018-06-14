<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

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
