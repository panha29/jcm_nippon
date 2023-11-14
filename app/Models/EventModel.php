<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'events_title',
        'events_image',
        'events_date',
        'events_detail',
        'events_important',
    ];
}
