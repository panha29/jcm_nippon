<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealerModel extends Model
{
    use HasFactory;
    protected $table = 'dealer';
    protected $fillable = [
        'dealer_name',
        'dealer_location',
        'dealer_phone',
    ];
}
