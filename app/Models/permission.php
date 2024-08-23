<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    // use HasFactory;
    protected $fillable =['name','lable'];


    public function roles (){
        return $this->belongsToMany(role::class);
    }

    public function users (){
        return $this->belongsToMany(User::class);
    }
}
