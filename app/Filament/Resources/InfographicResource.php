<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Infographic;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InfographicResource\Pages;
use App\Filament\Resources\InfographicResource\RelationManagers;

class InfographicResource extends Resource
{
    protected static ?string $model = Infographic::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Image')
                    ->required()
                    ->directory('infographics'), // Folder penyimpanan
                Toggle::make('status')
                    ->label('Status')
                    ->inline(false),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->size(150),
                BooleanColumn::make('status')
                    ->label('Active')
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInfographics::route('/'),
            'create' => Pages\CreateInfographic::route('/create'),
            'edit' => Pages\EditInfographic::route('/{record}/edit'),
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
