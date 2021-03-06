<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Permission
 *
 * @mixin \Eloquent
 */
class Permission extends Model
{
    /**
     * the table associated with the model
     *
     * @var string
     */
    protected $table='permessions';

    /***
     *  the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable=[
        'permession_name'
    ];

    /**
     *  the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected $hidden = [];

}
