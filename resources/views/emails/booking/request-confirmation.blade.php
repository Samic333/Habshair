@component('mail::message')
# We received your request

Thanks {{ $booking->contact_name }}, we received your booking request.

- **Route:** {{ $booking->from_city }} → {{ $booking->to_city }}
- **Date:** {{ \Illuminate\Support\Carbon::parse($booking->preferred_date)->toFormattedDateString() }}
- **Trip type:** {{ ucfirst(str_replace('_', ' ', $booking->trip_type)) }}
- **Passengers:** {{ $booking->passengers }}

No payment is needed now. Our team will review availability and contact you via phone/WhatsApp at **{{ $booking->contact_phone }}**.

If you need to update details, reply to this email.

Thanks,
{{ config('app.name') }} bookings desk
@endcomponent
