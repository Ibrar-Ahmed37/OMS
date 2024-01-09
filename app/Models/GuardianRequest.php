<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'mother_name',
        'mother_cnic',
        'age',
        'father_name',
        'father_cnic',
        'parent_contact_number',
        'address',
        'child_name',
        'bayform_number',
        'child_gender',
        'reason_to_register',
        'file',
        'picture'
    ];
}
