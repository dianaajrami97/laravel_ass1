<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $table = 'order_product';
    public $fillable = [
        'id',
        'orderId',
        'productCode',
        'qty',
        'priceEach',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
