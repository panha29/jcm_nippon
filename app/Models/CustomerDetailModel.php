<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDetailModel extends Model
{
    use HasFactory;
    protected $table = 'customer_detail';
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_shipto',
        'customer_address',
        'customer_arrivelocation',
    ];
}
