<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormateurResource\Pages;
use App\Filament\Resources\FormateurResource\RelationManagers;
use App\Models\Formateur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormateurResource extends Resource
{
    protected static ?string $model = Formateur::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan([
                        'sm' => 1
                    ]),
                Forms\Components\TextInput::make('titre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_linkedin')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_twitter')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('link_facebook')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
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
