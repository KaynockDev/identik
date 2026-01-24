<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoctorResource\Pages;
use App\Filament\Resources\DoctorResource\RelationManagers;
use App\Models\Doctor;
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


class DoctorResource extends Resource
{

    use Translatable;

    protected static ?string $model = Doctor::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $modelLabel = 'Doktor';
    protected static ?string $pluralModelLabel = 'Doktorlar';
    protected static ?string $slug = 'doktorlar';






    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('name')
                    ->label("Adı")
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->maxLength(255),


                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')
                    ->label("Rol")
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label("Hakkında")
                    ->columnSpanFull(),
                Forms\Components\MarkdownEditor::make('content')
                    ->required()
                    ->label("İçerik")
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->columnSpanFull()
                    ->image()
                    ->label("Görsel")
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading("Doktor Listesi")
            ->description("İlk 3 sıradaki doktor, ana sayfada görüntülenmektedir.")
            ->reorderable("sort")
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label("Görsel")
                    ->square(),
                Tables\Columns\TextColumn::make('name')
                    ->label("Adı"),
                Tables\Columns\TextColumn::make('role')
                    ->label("Rol"),

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
            'index' => Pages\ListDoctors::route('/'),
            'create' => Pages\CreateDoctor::route('/create'),
            'edit' => Pages\EditDoctor::route('/{record}/edit'),
        ];
    }
}
