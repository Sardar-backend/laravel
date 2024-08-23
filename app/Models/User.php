<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email'
        ,'phonenumber',
        'password',
        'is_staff',
        'is_superuser'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function activecode(){
        return $this->hasMany(Activecode::class);
    }

    public function is_staff(){

        return $this->is_staff;
    }

    public function is_superuser(){
        return $this->is_superuser;
    }
    public function permission (){
        return $this->belongsToMany(permission::class);
    }

    public function role (){
        return $this->belongsToMany(role::class);
    }

    public function hasRole($role){
        return !! $role->intersect($this->roles)->all();
    }

    public function hasPermission($key){
        return $this->permisons->contains('name', $key->name) || $this->hasRole($key->roles);
    }


}
