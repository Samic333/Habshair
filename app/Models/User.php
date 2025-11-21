<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Filament\Models\Contracts\FilamentUser;          // add
use Spatie\Permission\Traits\HasRoles;               // add

class User extends Authenticatable implements FilamentUser
{
    use Notifiable, HasRoles;                        // add HasRoles

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Filament v2 access gate
    public function canAccessFilament(): bool
    {
        return $this->hasRole('Admin') || $this->email === 'admin@habeshair.com';
    }
}
