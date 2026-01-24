<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationLabel = 'SSS';

    protected static ?string $modelLabel = 'SSS';

    protected static ?string $pluralModelLabel = 'SSS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('FAQ Content')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Türkçe')
                            ->schema([
                                Forms\Components\Textarea::make('question')
                                    ->label('Soru')
                                    ->maxLength(500)
                                    ->rows(3)
                                    ->placeholder('Soru metnini girin...')
                                    ->required(),

                                Forms\Components\RichEditor::make('answer')
                                    ->label('Cevap')
                                    ->columnSpanFull()
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'bulletList',
                                        'orderedList',
                                        'h2',
                                        'h3',
                                        'h4',
                                        'blockquote',
                                        'codeBlock',
                                    ])
                                    ->placeholder('Cevap metnini girin...')
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\Textarea::make('question_en')
                                    ->label('Question (English)')
                                    ->maxLength(500)
                                    ->rows(3)
                                    ->placeholder('Enter question text...'),

                                Forms\Components\RichEditor::make('answer_en')
                                    ->label('Answer (English)')
                                    ->columnSpanFull()
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'strike',
                                        'link',
                                        'bulletList',
                                        'orderedList',
                                        'h2',
                                        'h3',
                                        'h4',
                                        'blockquote',
                                        'codeBlock',
                                    ])
                                    ->placeholder('Enter answer text...'),
                            ]),
                    ])
                    ->columnSpanFull(),

                Forms\Components\Section::make('Ayarlar')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label('Aktif')
                                    ->default(true)
                                    ->required(),

                                Forms\Components\Toggle::make('show_on_homepage')
                                    ->label('Ana Sayfada Göster')
                                    ->helperText('Bu soru ana sayfadaki SSS önizlemesinde gösterilsin mi?')
                                    ->default(false)
                                    ->required(),
                            ]),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->reorderable("order")
            ->heading("SSS Listesi")
            ->description("Sık sorulan soruları buradan düzenleyebilirsiniz.")
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->label('Soru')
                    ->limit(50)
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('answer')
                    ->label('Cevap')
                    ->limit(100)
                    ->html()
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Durum')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\IconColumn::make('show_on_homepage')
                    ->label('Ana Sayfa')
                    ->boolean()
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Oluşturulma Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Güncellenme Tarihi')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Durum')
                    ->placeholder('Tümü')
                    ->trueLabel('Aktif')
                    ->falseLabel('Pasif'),
                Tables\Filters\TernaryFilter::make('show_on_homepage')
                    ->label('Ana Sayfa Gösterimi')
                    ->placeholder('Tümü')
                    ->trueLabel('Ana Sayfada')
                    ->falseLabel('Ana Sayfada Değil'),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaqs::route('/'),
            'create' => Pages\CreateFaq::route('/create'),
            'edit' => Pages\EditFaq::route('/{record}/edit'),
        ];
    }
}
