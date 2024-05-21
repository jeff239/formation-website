<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Filament\Resources\PublicationResource\RelationManagers\AuteurRelationManager;
use App\Models\Categorie;
use App\Models\Publication;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('author')
                    ->label('Auteur')
                    ->options(User::all()->pluck('name', 'name'))
                    ->required(),
                Forms\Components\Select::make('category')
                    ->label('Categories')
                    ->options(Categorie::all()->pluck('name', 'name'))
                    ->getOptionLabelFromRecordUsing(fn (Categorie $record) => "{$record->name}")
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('Titre de la publication')
                    ->required()
                    ->live(debounce: 1000)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('Slug')
                    ->readOnly()
                    ->maxLength(255)
                    ->required(),
                Forms\Components\RichEditor::make('content')
                    ->disableToolbarButtons($buttons = [
                        'attachFiles'
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->visibility('public')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(uniqid("img-", true)),
                    )
                    ->required(),
                Forms\Components\FileUpload::make('banner')
                    ->label('Bannière')
                    ->image()
                    ->visibility('public')
                    ->getUploadedFileNameForStorageUsing(
                        fn (TemporaryUploadedFile $file): string => (string) str(uniqid("img-", true)),
                    )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('auteur.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('banner'),
                Tables\Columns\TextColumn::make('content')
                    ->limit(20)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
