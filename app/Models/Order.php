<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'product_name',
        'quantity',
        'customer_email',
        'customer_phone',
        'customer_address',
        'order_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
