<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'price'
        ,'discription',
        'stars',
        'with',
        'length',
        'discust',
        'garant'
    ];

    public function comment() {
        return $this->morphMany(comment::class,'commenttable');
    }
}
