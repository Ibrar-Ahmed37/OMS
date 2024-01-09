<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrphanRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ngo_name',
        'address',
        'contact_no',
        'orphan_name',
        'orphan_age',
        'orphan_gender',
        'orphan_description',
        'city',
        'orphan_bayform',
        'file',
        'picture'
    ];
}
