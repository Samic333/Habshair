@component('mail::message')
# New booking request

**From:** {{ $booking->from_city }} → **To:** {{ $booking->to_city }}  
**Date:** {{ \Illuminate\Support\Carbon::parse($booking->preferred_date)->toFormattedDateString() }}  
**Trip type:** {{ ucfirst(str_replace('_', ' ', $booking->trip_type)) }}  
**Passengers:** {{ $booking->passengers }}

**Contact:** {{ $booking->contact_name }}  
@if($booking->contact_email)
Email: {{ $booking->contact_email }}  
@endif
Phone/WhatsApp: {{ $booking->contact_phone }}

@if($booking->notes)
**Notes:**
{{ $booking->notes }}
@endif

@component('mail::button', ['url' => config('app.url')])
Open admin
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
