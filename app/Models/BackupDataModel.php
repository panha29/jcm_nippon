<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupDataModel extends Model
{
    use HasFactory;
    protected $table = 'backup_data';
    protected $fillable = [
        'customer_name',
        'customer_vip',
        'customer_invoice',
        'customer_discount',
        'customer_gender',
        'customer_email',
        'customer_phone',
        'customer_address',
        'customer_image',
        'customer_date',
        'customer_time',
        'customer_email',
        'customer_total',
    ];
}
