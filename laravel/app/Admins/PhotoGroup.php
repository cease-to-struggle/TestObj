<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class PhotoGroup extends Model
{
    //
    /**
     * the table assoicated with the model
     *
     * @var string
     */
    protected $table='photo_groups';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id','group_name'
    ];

    /**
     * the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected  $hidden = [];
}
