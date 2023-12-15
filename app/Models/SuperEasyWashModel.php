<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperEasyWashModel extends Model
{
    use HasFactory;
    protected $table = 'colorprice_supereasywash';
    protected $fillable = [
        'color_name',
        'color_tag',
        'color_image',
        'color_1l',
        'color_5l',
        'color_18l',
    ];
}
