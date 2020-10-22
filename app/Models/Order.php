<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $table = 'orders';
    public $fillable = [
        'id',
        'customerId',
        'status',
        'comments',
    ];
    public $dates = [
        'orderDate',
        'requiredDate',
        'shippedDate',
        'created_at',
        'deleted_at'
    ];
}
