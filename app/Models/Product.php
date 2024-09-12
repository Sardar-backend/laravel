<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //  use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'image',
        'name',
        'price'
        ,'discription',
        'stars',
        'with',
        'length',
        'discust',
        'garant',
        'count_view'
    ];

    public function comment() {
        return $this->morphMany(comment::class,'commenttable');
    }


    public function category() {

        return $this->belongsToMany(productcategory::class);
    }

    public function attribute () {
        return $this->belongsToMany(Attributes::class,'attribute_product');
    }

    public function gallery() {
        return $this->hasMany(Gallery::class);
    }
    // public function favorite (){
    //     return $this->belongsToMany(User::class,'favorites','user_id','products_id','id','id');
    // }

}
