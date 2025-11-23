<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'from_city',
        'to_city',
        'preferred_date',
        'trip_type',
        'passengers',
        'contact_name',
        'contact_email',
        'contact_phone',
        'notes',
        'source',
        'status',
    ];
}
