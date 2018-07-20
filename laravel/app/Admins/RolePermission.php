<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class RolePermission extends Model
{
    /**
     * the table associated with the model
     *
     * @var string
     */
    protected $table='role_permessions';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable=[
        'role_id','permession_ids'
    ];

    /**
     * the attributes that should be hidden for arrays
     *
     * @var array
     */
    protected $hidden=[];


}
