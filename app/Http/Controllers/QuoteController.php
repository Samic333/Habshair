<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'service_type' => 'required|string|in:charter,cargo,drone,medevac,vip',
            'country' => 'nullable|string|max:255',
            'departure_location' => 'nullable|string|max:255',
            'destination_location' => 'nullable|string|max:255',
            'aircraft_type' => 'nullable|string|max:255',
            'cargo_type' => 'nullable|string|max:255',
            'rotations' => 'nullable|integer|min:1',
            'drone_mission_area' => 'nullable|string|max:255',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'notes' => 'nullable|string|max:5000',
        ]);

        // Normalize to existing Quote fields
        $data['status'] = 'new';
        $data['rotations'] = $data['rotations'] ?? 1;

        Quote::create($data);

        return back()->with('status', 'Quote request received. We will reach out shortly.');
    }
}
