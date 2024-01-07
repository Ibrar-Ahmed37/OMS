<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_contact_number',
        'user_gender',
        'user_cnic',
        'orphan_name',
        'orphan_gender',
        'rescue_location',
    ];
}
