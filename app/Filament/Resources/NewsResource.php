<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\News;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\NewsResource\Pages;
use AmidEsfahani\FilamentTinyEditor\TinyEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewsResource\RelationManagers;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Judul')
                    ->maxLength(255)
                    ->hint('Max 255 characters allowed')
                    ->reactive()
                    ->rule('string'),
                TinyEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsVisibility('public')
                    ->fileAttachmentsDirectory('uploads')
                    ->profile('default|simple|full|minimal|none|custom')
                    ->rtl() // Set RTL or use ->direction('auto|rtl|ltr')
                    ->columnSpan('full')
                    ->required(),
                FileUpload::make('thumbnail')
                    ->image()
                    ->required()
                    ->label('Thumbnail')
                    ->directory('thumbnail')
                    ->maxSize(10240)
                    ->hint('Max 10Mb'),
                FileUpload::make('gallery')
                    ->image()
                    ->multiple()
                    ->label('Galeri Gambar')
                    ->directory('galleries')
                    ->maxFiles(6)
                    ->maxSize(10240)
                    ->hint('Max 10Mb'),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Kategori'),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->default(Filament::auth()->user()->id)
                    ->disabled()
                    ->required()
                    ->label('Author'),
                TextInput::make('slug')
                    ->disabled()
                    ->unique(News::class, 'slug', ignoreRecord: true)
                    ->label('Slug'),
                DateTimePicker::make('upload_time')
                    ->default(now())
                    ->required()
                    ->label('Waktu Unggah'),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'publish' => 'Publish',
                    ])
                    ->default('draft')
                    ->label('Status')
                    ->disabled(fn() => Auth::user()->role === 'author'), // Disable for author role
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Judul')
                    ->sortable()
                    ->searchable()
                    ->limit(20),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Author')
                    ->sortable()
                    ->searchable(),
                BadgeColumn::make('status')
                    ->colors([
                        'warning' => 'draft',
                        'success' => 'published',
                    ]),
                Tables\Columns\TextColumn::make('content')
                    ->label('Content')
                    ->searchable()
                    ->limit(50)
                    ->html()
                    ->formatStateUsing(fn($state) => strip_tags($state)),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->size(150),
                Tables\Columns\TextColumn::make('upload_time')
                    ->label('Waktu Unggah')
                    ->dateTime()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make()
                    ->visible(fn() => Auth::user()->role === 'admin'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\RestoreAction::make()
                    ->visible(fn($record) => $record->trashed()),
                Tables\Actions\ForceDeleteAction::make()
                    ->visible(fn($record) => $record->trashed())
            ])
            ->bulkActions([
                Tables\Actions\RestoreBulkAction::make()
                    ->visible(fn($records) => $records && $records->isNotEmpty() && $records->contains(fn($record) => $record->trashed())),
                Tables\Actions\ForceDeleteBulkAction::make()
                    ->visible(fn($records) => $records && $records->isNotEmpty() && $records->contains(fn($record) => $record->trashed())),
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(fn() => Auth::user()->role === 'admin'),
                ]),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return in_array(Auth::user()->role, ['admin', 'author']);
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->role === 'admin';
    }
}
