<?php

namespace App\Filament\Resources\BookingRequestResource\Pages;

use App\Filament\Resources\BookingRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookingRequest extends EditRecord
{
    protected static string $resource = BookingRequestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
