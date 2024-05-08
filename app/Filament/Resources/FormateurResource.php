<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormateurResource\Pages;
use App\Filament\Resources\FormateurResource\RelationManagers;
use App\Models\Formateur;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormateurResource extends Resource
{
    protected static ?string $model = Formateur::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('nom')
                        ->required()
                        ->maxLength(255)
                ]),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('titre')
                        ->required()
                        ->maxLength(255)
                ]),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('link_linkedin')
                        ->required()
                        ->url()
                        ->maxLength(255)
                ]),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('link_twitter')
                        ->required()
                        ->url()
                        ->maxLength(255)
                ]),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('link_facebook')
                        ->required()
                        ->url()
                        ->maxLength(255)
                ]),
                Grid::make(2)->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->required()
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titre')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('link_linkedin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('link_facebook')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormateurs::route('/'),
            'create' => Pages\CreateFormateur::route('/create'),
            'edit' => Pages\EditFormateur::route('/{record}/edit'),
        ];
    }
}
