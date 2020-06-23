<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'value',
        'available',
        'image'
    ];

    public function setValueAttribute($value)
    {
        return $this->attributes['value'] = "R$ ".$value;
    }
}
