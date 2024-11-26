<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Notifications\Notification; // Tambahkan ini untuk notifikasi
use Filament\Forms\Components\TextInput;
use App\Models\News; // Import Model News
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Category Name'),
                TextInput::make('slug')
                    ->disabled()
                    ->label('Slug'),
            ]);
    } 

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Category Name')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        if ($record->slug === 'berita-lainnya') {
                            // Menampilkan notifikasi menggunakan Notification::make()
                            Notification::make()
                                ->title('Error')
                                ->body('The default "Berita Lainnya" category cannot be deleted.')
                                ->danger()
                                ->send();
    
                            throw new \Exception('Operation aborted: The default "Berita Lainnya" category cannot be deleted.');
                        }
    
                        // Memindahkan berita ke kategori default lain jika perlu
                        static::reassignNewsToDefaultCategory($record);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->before(function ($records) {
                        foreach ($records as $record) {
                            if ($record->slug === 'berita-lainnya') {
                                // Menampilkan notifikasi menggunakan Notification::make()
                                Notification::make()
                                    ->title('Error')
                                    ->body('One or more categories include "Berita Lainnya", which cannot be deleted.')
                                    ->danger()
                                    ->send();
    
                                throw new \Exception('Operation aborted: Default "Berita Lainnya" category detected.');
                            }
    
                            // Memindahkan berita ke kategori default lain jika perlu
                            static::reassignNewsToDefaultCategory($record);
                        }
                    }),
            ]);
    }
    




    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    /**
     * Reassign news to the default category before deleting the category.
     *
     * @param \App\Models\Category $category
     * @return void
     */
    public static function reassignNewsToDefaultCategory($category)
    {
        // Get the default category
        $defaultCategory = Category::where('slug', 'berita-lainnya')->first();

        if (!$defaultCategory) {
            throw new ModelNotFoundException('Default category not found. Please create a category with slug "berita lainnya".');
        }

        // Update all news related to the category to the default category
        News::where('category_id', $category->id)->update(['category_id' => $defaultCategory->id]);
    }
}
