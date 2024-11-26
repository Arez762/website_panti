<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PhotoGallery;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Forms\Components\BelongsToSelect;
use App\Filament\Resources\PhotoGalleryResource\Pages;
use App\Filament\Resources\PhotoGalleryResource\Pages\EditPhotoGallery;
use App\Filament\Resources\PhotoGalleryResource\Pages\CreatePhotoGallery;
use App\Filament\Resources\PhotoGalleryResource\Pages\ListPhotoGalleries;

class PhotoGalleryResource extends Resource
{
    protected static ?string $model = PhotoGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Judul')
                    ->maxLength(255) // Enforce a maximum of 255 characters
                    ->hint('Max 255 characters allowed') // Shows a hint below the input
                    ->reactive(), // Enables real-time validation,
                FileUpload::make('image_path')
                    ->image()
                    ->directory('gallery')
                    ->required()
                    ->label('Upload Gambar')
                    ->maxSize(10240) // Maximum upload size of 10MB (in KB)
                    ->hint('Max 10Mb'),
                Hidden::make('user_id')
                    ->default(fn() => Filament::auth()->user() ? Filament::auth()->user()->id : null)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn($state) => str_word_count($state, 1) > 10
                        ? implode(' ', array_slice(str_word_count($state, 1), 0, 10)) . '...'
                        : $state),
                TextColumn::make('user.name')->label('User')->sortable()->searchable(),
                ImageColumn::make('image_path')->size(150),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make() // Filter untuk menampilkan data yang dihapus sementara
                    ->visible(fn() => Auth::user()->role === 'admin'),
            ])
            ->actions([
                EditAction::make()
                    ->label('Edit')
                    ->icon('heroicon-s-pencil')
                    ->tooltip('Edit Photo')
                    ->visible(fn() => Auth::user()->role === 'admin'),
                Tables\Actions\RestoreAction::make()
                    ->visible(fn($record) => $record->trashed()), // Hanya tampil untuk data yang dihapus sementara
                Tables\Actions\ForceDeleteAction::make()
                    ->visible(fn($record) => $record->trashed()) // Hanya tampil untuk data yang dihapus sementara

            ])
            ->bulkActions([
                Tables\Actions\RestoreBulkAction::make()
                    ->visible(fn($records) => $records && $records->isNotEmpty() && $records->contains(fn($record) => $record->trashed())), // Tampilkan jika ada data yang terhapus
                Tables\Actions\ForceDeleteBulkAction::make()
                    ->visible(fn($records) => $records && $records->isNotEmpty() && $records->contains(fn($record) => $record->trashed())), // Tampilkan jika ada data yang terhapus
                DeleteBulkAction::make()
                    ->label('Delete Selected')
                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
                    ->deselectRecordsAfterCompletion()
                    ->visible(fn() => Auth::user()->role === 'admin'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhotoGalleries::route('/'),
            'create' => Pages\CreatePhotoGallery::route('/create'),
            'edit' => Pages\EditPhotoGallery::route('/{record}/edit'),
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
