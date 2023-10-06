<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'order_date',
        'testing_date',
        'arriving_date',
        'order_time',
        'testing_time',
        'arriving_time',
        'name',
        'purpose',
        'traditionaldress',
        'moderndress',
        'items',
        'bookingimg1',
        'bookingimg2',
        'bookingimg3',
        'bookingimg4',
    ];
}
