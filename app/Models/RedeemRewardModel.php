<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemRewardModel extends Model
{
    use HasFactory;
    protected $table = 'redeem';
    protected $fillable = [
        'customer_name',
        'customer_phone',
        'redeem_no',
        'redeem_type',
        'redeem_balance',
        'redeem_date',
        'redeem_by',
        'redeem_note',
        'redeem_special',
    ];
}
