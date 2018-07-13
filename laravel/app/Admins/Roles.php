<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    /**
     * the Table associated with the model
     *
     * @var string
     */
    protected $table='roles';

    /**
     * the attributes that are mass assignable
     *
     *  @var array
     */
    protected $fillable = [
        'role_name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function userRole()
    {
        return $this->hasMany(UserRoles::class,'role_id');
    }
}
