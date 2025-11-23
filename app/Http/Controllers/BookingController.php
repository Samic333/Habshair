<?php

namespace App\Http\Controllers;

use App\Mail\BookingRequestConfirmation;
use App\Mail\BookingRequestSubmitted;
use App\Models\BookingRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class BookingController extends Controller
{
    public function showForm(): View
    {
        return view('booking');
    }

    public function submit(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'from_city' => 'required|string|max:100',
            'to_city' => 'required|string|max:100|different:from_city',
            'preferred_date' => 'required|date|after_or_equal:today',
            'trip_type' => 'required|in:one_way,return,charter',
            'passengers' => 'required|integer|min:1|max:50',
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'required|string|max:255',
            'notes' => 'nullable|string|max:3000',
            'website' => 'nullable|size:0', // honeypot
        ]);

        $bookingRequest = BookingRequest::create([
            'from_city' => $validated['from_city'],
            'to_city' => $validated['to_city'],
            'preferred_date' => $validated['preferred_date'],
            'trip_type' => $validated['trip_type'],
            'passengers' => $validated['passengers'],
            'contact_name' => $validated['contact_name'],
            'contact_email' => $validated['contact_email'] ?? null,
            'contact_phone' => $validated['contact_phone'],
            'notes' => $validated['notes'] ?? null,
            'source' => 'web',
            'status' => 'new',
        ]);

        $internalTo = config('mail.booking_inbox', env('BOOKINGS_INBOX', 'bookings@habeshair.com'));
        if ($internalTo) {
            Mail::to($internalTo)->send(new BookingRequestSubmitted($bookingRequest));
        }

        if (!empty($bookingRequest->contact_email)) {
            Mail::to($bookingRequest->contact_email)->send(new BookingRequestConfirmation($bookingRequest));
        }

        return redirect()->route('book')->with('status', 'Thank you – our team will review your request and contact you shortly via phone or WhatsApp.');
    }
}
