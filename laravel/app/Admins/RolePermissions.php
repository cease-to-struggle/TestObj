<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class RolePermissions extends Model
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Roles::class,'role_id');
    }
}
