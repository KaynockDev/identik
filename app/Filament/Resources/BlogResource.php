<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class BlogResource extends Resource
{

    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $modelLabel = 'Blog';
    protected static ?string $pluralModelLabel = 'Bloglar';
    protected static ?string $slug = 'bloglar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Blog Content')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Türkçe')
                            ->schema([
                                Forms\Components\TextInput::make('title_tr')
                                    ->label("Başlık (Türkçe)")
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Set $set, ?string $state, $get) {
                                        if ($state && !$get('slug_tr')) {
                                            $set('slug_tr', Str::slug($state));
                                        }
                                    })
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('slug_tr')
                                    ->required()
                                    ->maxLength(255)
                                    ->label("URL (Türkçe)")
                                    ->helperText("Blog yazısının URL'de görünecek kısmı. Örnek: 'dis-beyazlatma-hakkinda'")
                                    ->placeholder("blog-yazisi-url"),

                                Forms\Components\FileUpload::make('image_tr')
                                    ->columnSpanFull()
                                    ->disk('public')
                                    ->directory("blogs")
                                    ->label("Görsel (Türkçe)")
                                    ->image()
                                    ->required(),

                                Forms\Components\MarkdownEditor::make('content_tr')
                                    ->disableToolbarButtons(["code", "table"])
                                    ->required()
                                    ->columnSpanFull()
                                    ->label("İçerik (Türkçe)")
                                    ->placeholder('Blog içeriğini Türkçe olarak girin...'),
                            ]),

                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label("Title (English)")
                                    ->required()
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (Set $set, ?string $state, $get) {
                                        if ($state && !$get('slug_en')) {
                                            $set('slug_en', Str::slug($state));
                                        }
                                    })
                                    ->maxLength(255),

                                Forms\Components\TextInput::make('slug_en')
                                    ->required()
                                    ->maxLength(255)
                                    ->label("URL (English)")
                                    ->helperText("The URL part of the blog post. Example: 'teeth-whitening-about'")
                                    ->placeholder("blog-post-url"),

                                Forms\Components\FileUpload::make('image_en')
                                    ->columnSpanFull()
                                    ->disk('public')
                                    ->directory("blogs")
                                    ->label("Image (English)")
                                    ->image()
                                    ->required(),

                                Forms\Components\MarkdownEditor::make('content_en')
                                    ->disableToolbarButtons(["code", "table"])
                                    ->required()
                                    ->columnSpanFull()
                                    ->label("Content (English)")
                                    ->placeholder('Enter blog content in English...'),
                            ]),
                    ])
                    ->columnSpanFull()
                    ->persistTabInQueryString(false),

                Forms\Components\Section::make('Ayarlar')
                    ->schema([
                        Forms\Components\TextInput::make('sort')
                            ->label("Sıralama")
                            ->numeric()
                            ->default(9999),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\ImageColumn::make('image_tr')
                    ->label("Görsel")
                    ->getStateUsing(fn ($record) => app()->getLocale() === 'en' && $record->image_en ? $record->image_en : ($record->image_tr ?? $record->image)),
                Tables\Columns\TextColumn::make('title_tr')
                    ->label("Başlık")
                    ->searchable()
                    ->formatStateUsing(fn ($record) => app()->getLocale() === 'en' && $record->title_en ? $record->title_en : ($record->title_tr ?? '')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label("Oluşturulma Tarihi")
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sort')
                    ->label("Sıralama")
                    ->sortable(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
