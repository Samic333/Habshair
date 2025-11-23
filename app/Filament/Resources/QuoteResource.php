<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Models\Quote;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Sales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Request details')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('customer_name')
                                    ->label('Customer name')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('customer_email')
                                    ->label('Customer email')
                                    ->email()
                                    ->maxLength(255),
                            ]),
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('service_type')
                                    ->options(self::serviceTypeOptions())
                                    ->required()
                                    ->searchable(),
                                Forms\Components\Select::make('status')
                                    ->options(self::statusOptions())
                                    ->required()
                                    ->default('new'),
                                Forms\Components\Select::make('staff_id')
                                    ->label('Assigned staff')
                                    ->relationship('staff', 'name')
                                    ->searchable()
                                    ->placeholder('Unassigned'),
                            ]),
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\TextInput::make('country')->maxLength(255),
                                Forms\Components\TextInput::make('departure_location')->label('Departure')->maxLength(255),
                                Forms\Components\TextInput::make('destination_location')->label('Destination')->maxLength(255),
                                Forms\Components\TextInput::make('aircraft_type')->label('Aircraft')->maxLength(255),
                                Forms\Components\TextInput::make('cargo_type')->label('Cargo type')->maxLength(255),
                                Forms\Components\TextInput::make('rotations')->numeric()->default(1)->minValue(1),
                                Forms\Components\TextInput::make('drone_mission_area')->label('Drone mission area')->maxLength(255),
                                Forms\Components\TextInput::make('phone')->tel()->maxLength(255),
                                Forms\Components\TextInput::make('company')->maxLength(255),
                            ]),
                        Forms\Components\Textarea::make('details')
                            ->label('Request details')
                            ->rows(4)
                            ->maxLength(5000),
                        Forms\Components\Textarea::make('notes')
                            ->label('Public notes')
                            ->rows(3)
                            ->maxLength(5000),
                        Forms\Components\Textarea::make('internal_notes')
                            ->label('Internal notes')
                            ->rows(3)
                            ->maxLength(5000)
                            ->helperText('Visible only to staff; use for follow-ups or blockers.')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Customer')
                    ->searchable(),
                Tables\Columns\TextColumn::make('service_type')
                    ->badge()
                    ->colors([
                        'primary',
                        'warning' => ['cargo'],
                        'success' => ['charter', 'vip'],
                        'danger' => ['medevac'],
                        'info' => ['drone'],
                    ])
                    ->formatStateUsing(fn (string $state) => self::serviceTypeOptions()[$state] ?? $state),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->colors([
                        'gray' => 'new',
                        'warning' => 'reviewing',
                        'success' => 'quoted',
                        'primary' => 'in-progress',
                        'danger' => 'declined',
                        'secondary' => 'closed',
                    ])
                    ->formatStateUsing(fn (string $state) => self::statusOptions()[$state] ?? $state),
                Tables\Columns\TextColumn::make('country')
                    ->sortable()
                    ->toggleable()
                    ->placeholder('-'),
                Tables\Columns\TextColumn::make('departure_location')
                    ->label('Departure')
                    ->sortable()
                    ->placeholder('-')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('destination_location')
                    ->label('Destination')
                    ->sortable()
                    ->placeholder('-')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('staff.name')
                    ->label('Assigned')
                    ->placeholder('Unassigned')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('service_type')
                    ->options(self::serviceTypeOptions())
                    ->label('Service'),
                Tables\Filters\SelectFilter::make('status')
                    ->options(self::statusOptions()),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'view' => Pages\ViewQuote::route('/{record}'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }

    protected static function serviceTypeOptions(): array
    {
        return [
            'charter' => 'Charter',
            'cargo' => 'Cargo',
            'medevac' => 'MedEvac',
            'vip' => 'VIP',
            'drone' => 'Drone Ops',
        ];
    }

    protected static function statusOptions(): array
    {
        return [
            'new' => 'New',
            'reviewing' => 'Reviewing',
            'in-progress' => 'In Progress',
            'quoted' => 'Quoted',
            'declined' => 'Declined',
            'closed' => 'Closed',
        ];
    }
}
