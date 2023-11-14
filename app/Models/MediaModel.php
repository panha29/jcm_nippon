<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaModel extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $fillable = [
        'media_title',
        'media_image',
        'media_date',
        'media_detail',
    ];
}
