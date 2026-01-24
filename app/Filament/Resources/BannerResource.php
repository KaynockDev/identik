<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'Banner';
    protected static ?string $pluralModelLabel = 'Bannerlar';
    protected static ?string $slug = 'bannerlar';





    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->columnSpanFull()
                    ->image()
                    ->directory("banners")
                    ->label("Görsel")
                    ->required(),
                
                Forms\Components\Tabs::make('Dil Seçenekleri')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Türkçe')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Başlık')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('subtitle')
                                    ->label('Alt Başlık')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description')
                                    ->label('Açıklama')
                                    ->rows(3)
                                    ->maxLength(500),
                            ]),
                        
                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Forms\Components\TextInput::make('title_en')
                                    ->label('Title')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('subtitle_en')
                                    ->label('Subtitle')
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('description_en')
                                    ->label('Description')
                                    ->rows(3)
                                    ->maxLength(500),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->reorderable("sort")
            ->heading("Banner Listesi")
            ->description("Ana sayfa açılış ekranındaki slider görsellerini ve metinlerini buradan düzenleyebilirsiniz.")

            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label("Görsel")
                    ->square(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
                    ->label('Alt Başlık')
                    ->limit(30)
                    ->searchable(),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
