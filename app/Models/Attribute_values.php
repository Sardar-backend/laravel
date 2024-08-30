<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute_values extends Model
{
    // use HasFactory;
    protected $table = 'attribute_value';
    protected $fillable = ['attribute_id', 'value'];



    public function attribute () {
        return $this->belongsTo(Attributes::class);
    }
}
