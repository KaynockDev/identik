<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarkdownResource\Pages;
use App\Filament\Resources\MarkdownResource\RelationManagers;
use App\Models\Markdown;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;


class MarkdownResource extends Resource
{
    use Translatable;

    protected static ?string $model = Markdown::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $modelLabel = 'Sayfa İçeriği';
    protected static ?string $pluralModelLabel = 'Sayfa İçerikleri';
    protected static ?string $slug = 'sayfa-icerikleri';
    protected static ?string $navigationGroup = 'Ayarlar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->disabled()
                    ->label("Başlık")
                    ->maxLength(255),

                Forms\Components\MarkdownEditor::make('value')
                    ->disableToolbarButtons(["code", "table"])
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label("Başlık"),
                Tables\Columns\TextColumn::make('value')
                    ->limit(50)
                    ->label("İçerik")

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMarkdowns::route('/'),
            // 'create' => Pages\CreateMarkdown::route('/create'),
            'edit' => Pages\EditMarkdown::route('/{record}/edit'),
        ];
    }
}
