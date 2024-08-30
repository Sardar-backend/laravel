<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{

    public $timestamps = false;
    public $fillable = [ 'id', 'title', 'content','count_view'];



    public  function comment() {
        return $this->morphMany(comment::class, 'commenttable');
    }
}
