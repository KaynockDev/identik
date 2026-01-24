<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TreatmentResource\Pages;
use App\Filament\Resources\TreatmentResource\RelationManagers;
use App\Models\Treatment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Set;
use Illuminate\Support\Str;



class TreatmentResource extends Resource
{
    use Translatable;

    protected static ?string $model = Treatment::class;

    protected static ?string $navigationIcon = 'icon-treatments';


    protected static ?string $modelLabel = 'Tedavi';
    protected static ?string $pluralModelLabel = 'Tedaviler';
    protected static ?string $slug = 'tedaviler';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->label("Başlık")
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),


                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->label("Açıklama")
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->columnSpanFull()
                    ->directory("treatments")
                    ->label("Görsel")
                    ->image()
                    ->required(),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\ImageColumn::make('image')

                    ->label("Görsel"),
                Tables\Columns\TextColumn::make('name')
                    ->label("Başlık"),


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
            'index' => Pages\ListTreatments::route('/'),
            'create' => Pages\CreateTreatment::route('/create'),
            'edit' => Pages\EditTreatment::route('/{record}/edit'),
        ];
    }
}
