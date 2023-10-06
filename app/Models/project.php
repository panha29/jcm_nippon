<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable = [
        'head_tailor',
        'tailor',
        'den_tailor',
        'den_start_date',
        'den_end_date',
        'start_date',
        'process_start_date',
        'testing_date',
        'pickup_date',
        'order_date',
        'process_start_time',
        'testing_time',
        'pickup_time',
        'order_time',
        'end_date',
        'delay_date',
        'problem',
        'note',
        'project',
        'quantity',
        'progress',
        'progress_den',
        'progress_de',
        'project',
        'pj_customer_name',
        'pj_image1',
        'pj_image2',
        'pj_image3',
        'pj_image4',
        'project_den',
        'project_de',
    ];
}
