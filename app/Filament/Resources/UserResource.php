<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\UserResource\Pages;
use App\Models\News; // Import Model News
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->required()
                ->unique(table: 'users', column: 'name', ignorable: fn($record) => $record),
            TextInput::make('email')
                ->email()
                ->required()
                ->unique(table: 'users', column: 'email', ignorable: fn($record) => $record),
            TextInput::make('password')
                ->password()
                ->minLength(8)
                ->helperText('Password minimal 8 karakter.')
                ->required(fn($livewire) => $livewire instanceof \Filament\Resources\Pages\CreateRecord) // Wajib di Create
                ->visibleOn('create') // Hanya di menu Create
                ->dehydrateStateUsing(fn($state) => bcrypt($state)),
            TextInput::make('new_password')
                ->label('Password Baru')
                ->password()
                ->minLength(8)
                ->helperText('Minimal 8 karakter.')
                ->visibleOn('edit') // Hanya di menu Edit
                ->dehydrateStateUsing(fn($state) => $state ? bcrypt($state) : null)
                ->nullable(), // Tidak wajib
            Select::make('role')
                ->options([
                    'admin' => 'Admin',
                    'author' => 'Author',
                ])
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                BadgeColumn::make('role')->colors([
                    'success' => 'admin',
                    'warning' => 'author',
                ]),
            ])
            ->filters([
                SelectFilter::make('role')->options([
                    'admin' => 'Admin',
                    'author' => 'Author',
                ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->visible(fn() => Auth::user()->role === 'admin'),
                Tables\Actions\DeleteAction::make()
                    ->before(function ($record) {
                        self::reassignNewsToDefaultAuthor($record);
                    })
                    ->visible(fn() => Auth::user()->role === 'admin'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->before(function ($records) {
                            foreach ($records as $record) {
                                self::reassignNewsToDefaultAuthor($record);
                            }
                        })
                        ->visible(fn() => Auth::user()->role === 'admin'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    /**
     * Reassign news to the default author before deleting the user.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public static function reassignNewsToDefaultAuthor($user)
    {
        $defaultAuthor = User::where('email', 'author@default.com')->first();

        if (!$defaultAuthor) {
            throw new ModelNotFoundException('Default author user not found.');
        }

        News::where('user_id', $user->id)->update(['user_id' => $defaultAuthor->id]);
    }

    /**
     * Only admin can view users.
     */
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
