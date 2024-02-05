<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllColorpricingModel extends Model
{
    use HasFactory;
    protected $table = 'colorprice_all';
    protected $fillable = [
        'color_name',
        'color_description',
        'color_tag',
        'color_image',
        'color_1l',
        'color_5l',
        'color_15l',
        'color_18l',
    ];
}
