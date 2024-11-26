<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pegawai;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\PegawaiResource\Pages;
use App\Filament\Resources\PegawaiResource\Pages\EditPegawai;
use App\Filament\Resources\PegawaiResource\Pages\ListPegawais;
use App\Filament\Resources\PegawaiResource\Pages\CreatePegawai;

class PegawaiResource extends Resource
{
    protected static ?string $model = Pegawai::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Pegawai';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->directory('pegawais')
                    ->image(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Nama'),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->label('Jabatan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->size(150),
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('jabatan')
                    ->label('Jabatan')
                    ->sortable()
                    ->searchable(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPegawais::route('/'),
            'create' => Pages\CreatePegawai::route('/create'),
            'edit' => Pages\EditPegawai::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return in_array(Auth::user()->role, ['admin']);
    }

    public static function canCreate(): bool
    {
        return Auth::user()->role === 'admin';
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->role === 'admin';
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->role === 'admin';
    }
}
