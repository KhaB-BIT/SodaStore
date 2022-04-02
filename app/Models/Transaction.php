<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment_id',
        'admin_id',
        'customer_id',
        'payment_method',
        'total',
        'status'
    ];
    const COMPLETED = 'COMPLETED';
    const PENDING = 'PENDING';

}
