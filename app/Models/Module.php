<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class Module extends BaseModel
{
    const ACCESS_SUPER_ADMIN = "Super Admin"; // Dont change it
    const ACCESS_PLATFORM = "Platform"; // Dont change it
    const ACCESS_MERCHANT = "Merchant"; // Dont change it
    const ACCESS_COMMON = "Common"; // Dont change it

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modules';

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        if (!Auth::user()->isSuperAdmin()) {
            static::addGlobalScope('NotSuperAdminModule', function (Builder $builder) {
                $builder->where('access', '!=', 'Super Admin');
            });
        }
    }

    /**
     * Get the permissions for the shop.
     */
    public function permissions()
    {
        return $this->hasMany(\App\Models\Permission::class);
    }

    // /**
    //  * Get all of the users for the module.
    //  */
    // public function users()
    // {
    //     return $this->hasManyThrough('App\User', 'App\Role');
    // }
}
