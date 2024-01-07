<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'comments',
        'amount',
        'payment_mode',
        'address',
        'city',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
