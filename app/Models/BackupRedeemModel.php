<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackupRedeemModel extends Model
{
    use HasFactory;
    protected $table = 'backup_redeem';
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'redeem_no',
        'redeem_type',
        'redeem_balance',
        'redeem_date',
        'redeem_by',
        'redeem_note',
    ];
}
