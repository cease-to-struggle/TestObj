<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    /**
     * the table associated with the model
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable=[
        'user_id','photo_group_id','s_path','m_path','l_path'
    ];

    /**
     * the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected $hidden = [];
}
