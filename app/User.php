<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function tenants()
    {
        return $this->belongsToMany('App\Tenants','usertenants','user_id','tenant_id');
    }


    public function authorizeRoles($roles)
    {
        if ($this->hasAnyRole($roles)) {
            return true;
        }
        abort(401, 'Esta Accion no esta autorizada.');
    }
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }


    public function elementVisibleByRol($roles){
        if ($this->hasAnyRole($roles)) {
            return "";
        }else{
            return"class='hide'";
        }
    }

    public function hasRole($role)
    {
        //verifica que sea un array, si es un array hace una busqueda del array
        if (is_array($role)) {
            return null !== $this->roles()->whereIn('name', $role)->first();
        }else{
            return null !== $this->roles()->where('name', $role)->first();
        }
    }
}
