<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name', 'last_name', 'full_name', 'gender', 'dob', 'email', 'phone', 'address', 'zipcode'
    ];
}
