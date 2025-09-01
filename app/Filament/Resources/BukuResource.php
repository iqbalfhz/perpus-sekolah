<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $navigationGroup = 'Manajemen Buku';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul Buku')
                    ->required(),
                Forms\Components\TextInput::make('penulis')
                    ->label('Penulis')
                    ->required(),
                Forms\Components\Select::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama')
                    ->required(),
                Forms\Components\Select::make('rak_id')
                    ->label('Rak')
                    ->relationship('rak', 'nama')
                    ->required(),
                Forms\Components\TextInput::make('stok')
                    ->label('Stok')
                    ->numeric()
                    ->required()
                    ->minValue(0),
                Forms\Components\TextInput::make('lokasi')
                    ->label('Lokasi')
                    ->maxLength(255),
                Forms\Components\TextInput::make('barcode')
                    ->label('Barcode')
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->label('Harga')
                    ->numeric(),
                Forms\Components\TextInput::make('foto')
                    ->label('Foto (URL)')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul'),
                Tables\Columns\TextColumn::make('penulis')->label('Penulis'),
                Tables\Columns\TextColumn::make('kategori.nama')->label('Kategori'),
                Tables\Columns\TextColumn::make('rak.nama')->label('Rak'),
                Tables\Columns\TextColumn::make('stok')->label('Stok'),
                Tables\Columns\TextColumn::make('lokasi')->label('Lokasi'),
                Tables\Columns\TextColumn::make('barcode')->label('Barcode'),
                Tables\Columns\TextColumn::make('harga')->label('Harga'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori_id')
                    ->label('Kategori')
                    ->relationship('kategori', 'nama'),
                Tables\Filters\SelectFilter::make('rak_id')
                    ->label('Rak')
                    ->relationship('rak', 'nama'),
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
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}
