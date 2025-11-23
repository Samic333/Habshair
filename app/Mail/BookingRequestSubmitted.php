<?php

namespace App\Mail;

use App\Models\BookingRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingRequestSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public BookingRequest $bookingRequest)
    {
    }

    public function build(): self
    {
        return $this->subject('New booking request')
            ->markdown('emails.booking.request-submitted', [
                'booking' => $this->bookingRequest,
            ]);
    }
}
