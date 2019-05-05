<?php

namespace App\Admins;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    /**
     * the table associated with the model
     *
     * @var string
     */
    protected $table = 'user_roles';

    /**
     * the attributes that are mess assignable
     *
     * @var array
     */
    protected $fillable = [
        'user_id','role_id'
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
       return $this->belongsTo(Role::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
