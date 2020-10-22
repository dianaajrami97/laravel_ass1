<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $table = 'customers';
    public $fillable = [
        'id',
        'salesRepEmployeeNum',
        'name',
        'lastName',
        'firstName',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'postalCode',
        'country',
        'creditLimit',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
