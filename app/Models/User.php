<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',  // Add 'first_name' to the fillable array
        'last_name',
        'date_of_birth',
        'email',
        'phone_number',
        'password',
        'gender',
        'user_type'
    ];
}
