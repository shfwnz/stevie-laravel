<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        'product_id',
        'type',
        'name',
        'add_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
