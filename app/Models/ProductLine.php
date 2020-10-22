<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $table = 'product_lines';
    public $fillable = [
        'id',
        'descInText',
        'descInHtml',
        'image',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
