<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $primaryKey = 'code';
    public $table = 'products';
    public $fillable = [
        'code',
        'productLineId',
        'name',
        'scale',
        'vendor',
        'pdtDescription',
        'qtyInStock',
        'buyPrice',
        'MSRP',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
