<?php

namespace App\Filament\Resources\BookingRequestResource\Pages;

use App\Filament\Resources\BookingRequestResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingRequests extends ListRecords
{
    protected static string $resource = BookingRequestResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
