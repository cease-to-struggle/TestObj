<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admins\Role
 *
 * @property int $id
 * @property string $role_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Admins\RolePermission $rolePermission
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Admins\UserRole[] $userRole
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Role whereRoleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admins\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends Model
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
        return $this->hasMany(UserRole::class,'role_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function rolePermission()
    {
        return $this->hasOne(RolePermission::class,'role_id');
    }
}
