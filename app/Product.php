<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Lembretes:
 *      Fazer mutators para o formato das datas
 */
class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'value',
        'available',
        'payment_method',
        'sold_quantity',
        'image'
    ];

    // public function setValueAttribute($value)
    // {
    //     return $this->attributes['value'] = "R$ ".$value;
    // }

    // public function setCreatedAtAttribute($dateTime)
    // {
    //     return $this->attributes['created_at'] = $dateTime->format('d/m/Y - H:i:s');
    // }

    // public function setUpdatedAtAttribute()
    // {
        
    // }
}
