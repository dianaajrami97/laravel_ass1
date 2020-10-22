<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $primaryKey = 'checkNum';
    public $table = 'payments';
    public $fillable = [
        'checkNum',
        'customerId',
        'amount',
    ];

    public $dates = ['paymentDate', 'created_at', 'deleted_at'];
}
