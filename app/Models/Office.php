<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;
    public $primaryKey = 'code';
    public $table = 'offices';
    public $fillable = [
        'code',
        'city',
        'phone',
        'address_1',
        'address_2',
        'state',
        'country',
        'postalCode',
        'territory',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
