<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorPricingModel extends Model
{
    use HasFactory;
    protected $table = 'product_pricing';
    protected $fillable = [
        'product_pricing_name',
        'product_pricing_price',
        'product_pricing_category',
        'product_pricing_quantity',
        'product_pricing_batch',
        'product_pricing_image',
    ];
}
