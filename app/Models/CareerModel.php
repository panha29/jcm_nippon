<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model
{
    use HasFactory;
    protected $table = 'career';
    protected $fillable = [
        'career_title',
        'career_position',
        'career_image',
        'career_date',
        'career_detail',
        'career_location',
        'career_gender',
        'career_hiring',
        'career_report_to',
    ];
}
