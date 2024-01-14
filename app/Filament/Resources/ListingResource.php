<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ListingResource\Pages;
use App\Filament\Resources\ListingResource\RelationManagers;
use App\Models\Category;
use App\Models\Listing;
use App\Models\Type;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use App\Models\User as SystemUser;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

use Filament\Tables\Actions\Action;


class ListingResource extends Resource
{
    protected static ?string $model = Listing::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('on_sale')->label('Is this listing on sale?'),
                Toggle::make('is_featured')->label('Set this listing as a feature?'),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->maxLength(255),
                RichEditor::make('description')
                    ->toolbarButtons([
                        'h2', 'bold', 'underline', 'italic', 'redo', 'undo',
                    ])->columnSpanFull(),
                TextInput::make('sqf')
                    ->numeric(),
                TextInput::make('price_per_sqf')
                    ->numeric()->hint('This will be based on SQF and Price Point.'),
                TextInput::make('price')
                    ->numeric(),
                TextInput::make('rooms')
                    ->numeric(),
                TextInput::make('bathrooms')
                    ->numeric(),
                Select::make('category_id')
                    ->label('Category')
                    ->native(false)
                    ->options(Category::all()->pluck('name', 'id')),
                Select::make('type_id')
                    ->label('Type')
                    ->native(false)
                    ->options(Type::all()->pluck('name', 'id')),
                Select::make('user_id')
                    ->label('User')
                    ->native(false)
                    ->options(SystemUser::all()->pluck('name', 'id'))
                    ->searchable()
                    ->loadingMessage('Loading users...')
                    ->getSearchResultsUsing(fn (string $search): array => SystemUser::where('name', 'like', "%{$search}%")->limit(50)->pluck('name', 'id')->toArray())
                    ->getOptionLabelUsing(fn ($value): ?string => SystemUser::find($value)?->name),
                TextInput::make('address')
                    ->maxLength(255),
                TextInput::make('zip')
                    ->maxLength(255),
                TextInput::make('city')
                    ->maxLength(255),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->description(fn (Listing $listing): string => $listing->city)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price')
                    ->money('USD')
                    ->description(fn (Listing $listing): string => 'Total SQF: ' . $listing->sqf)
                    ->sortable(),
                IconColumn::make('is_featured')
                    ->label('Featured?')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Added')
                    ->since()
            ])
            ->filters([
                Filter::make('is_featured')
                    ->query(fn (Builder $query) => $query->where('is_featured', true))->label('Featured?')->toggle(),
                // Add a Price Filter..
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

                Action::make('delete')
                    ->requiresConfirmation()
                    ->action(fn (Listing $listing) => $listing->delete())
                    ->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->deselectRecordsAfterCompletion(),
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
            'index' => Pages\ListListings::route('/'),
            'create' => Pages\CreateListing::route('/create'),
            'edit' => Pages\EditListing::route('/{record}/edit'),
        ];
    }
}
