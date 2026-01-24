<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SmileResource\Pages;
use App\Filament\Resources\SmileResource\RelationManagers;
use App\Models\Smile;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SmileResource extends Resource
{


    protected static ?string $model = Smile::class;

    protected static ?string $navigationIcon = 'heroicon-o-face-smile';

    protected static ?string $modelLabel = 'Gülüş';
    protected static ?string $pluralModelLabel = 'Gülüşlerimiz';
    protected static ?string $slug = 'guluslerimiz';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([


                Forms\Components\FileUpload::make('before_image')
                    ->columnSpanFull()
                    ->label("Öncesi Görsel")
                    ->image()
                    ->required(),
                Forms\Components\FileUpload::make('after_image')
                    ->columnSpanFull()
                    ->label("Sonrası Görsel")

                    ->image()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                Tables\Columns\ImageColumn::make('before_image')

                    ->label("Önceki Görsel"),
                Tables\Columns\ImageColumn::make('after_image')
                    ->label("Sonra Görsel"),


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
            ])
            ->reorderable('sort');

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
            'index' => Pages\ListSmiles::route('/'),
            'create' => Pages\CreateSmile::route('/create'),
            'edit' => Pages\EditSmile::route('/{record}/edit'),
        ];
    }
}
