<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorPaletteModel extends Model
{
    use HasFactory;
    protected $table = 'colorpalette';
    protected $fillable = [
        'colorpalette_category',
        'colorpalette_name',
        'colorpalette_rgb',
        'colorpalette_batch',
        'colorpalette_image',
    ];
}
