<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $primaryKey = 'UserId';
    protected $guarded = [];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isSuperUser()
    {
        return $this->is_superuser;
    }
    public function is_staff()
    {
        return $this->is_staff;
    }
    public function Editor()
    {
        return $this->editor;
    }

//    public static function where(string $string, $phone)
//    {
//    }
    protected function role():Attribute
    {
        return new Attribute(
            get: fn($value)=>['user','editor','admin'][$value],
        );
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function hasRole($roles)
    {
//         dd(!!$roles->intersect($this->roles)->all());
    }

    public function hasPermission($permission)
    {
        return $this->permissions->contains('name',$permission->name)|| $this->hasRole($permission->roles);
    }
}


//public function roles()
//{
//    return $this->belongsToMany(Role::class);
//}
//public function permissions()
//{
//    return $this->belongsToMany(Permission::class);
//}
//public function hasRole($roles)
//{
//    dd(!!$roles->intersect($this->roles)->all());
//}
//public function hasPermission($permission)
//{
//    return $this->permissions->contains('name',$permission->name)||$this->hasRole($permission->roles);
//}
