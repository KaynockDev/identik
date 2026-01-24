<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReelResource\Pages;
use App\Filament\Resources\ReelResource\RelationManagers;
use App\Models\Reel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReelResource extends Resource
{
    protected static ?string $model = Reel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('instagram_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('media_url')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('thumbnail_url')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('permalink')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('datetime')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_url'),
                Tables\Columns\TextColumn::make('datetime')
                    ->since()
                    ->dateTimeTooltip()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListReels::route('/'),
            // 'create' => Pages\CreateReel::route('/create'),
            'view' => Pages\ViewReel::route('/{record}'),
            // 'edit' => Pages\EditReel::route('/{record}/edit'),
        ];
    }
}
