<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    public $table = 'employees';
    public $fillable = [
        'id',
        'officeCode',
        'reportsTo',
        'lastName',
        'firstName',
        'extension',
        'email',
        'jobTitle',
    ];
    public $dates = ['created_at', 'deleted_at'];
}
