<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'payment_type',
        'payment_status',
        'country',
        'city',
        'street'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }
}
