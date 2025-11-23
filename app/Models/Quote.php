<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_email',
        'service_type',
        'status',
        'country',
        'departure_location',
        'destination_location',
        'aircraft_type',
        'cargo_type',
        'rotations',
        'drone_mission_area',
        'phone',
        'company',
        'notes',
        'details',
        'internal_notes',
        'staff_id',
    ];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
}
