<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adresse extends Model
{
    // use HasFactory;
    public $timestamps = false;
    public $fillable = ['user_id','ostan','tahvil','city','adress','number','post_number','failed_at'];



}
