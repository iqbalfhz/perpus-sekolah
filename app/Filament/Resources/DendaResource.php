<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DendaResource\Pages;
use App\Filament\Resources\DendaResource\RelationManagers;
use App\Models\Denda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DendaResource extends Resource
{
    protected static ?string $model = Denda::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('peminjaman_id')
                    ->label('Peminjaman')
                    ->relationship('peminjaman', 'id')
                    ->required(),
                Forms\Components\Select::make('anggota_id')
                    ->label('Anggota')
                    ->relationship('anggota', 'nama')
                    ->required(),
                Forms\Components\Select::make('jenis_denda')
                    ->label('Jenis Denda')
                    ->options([
                        'terlambat' => 'Terlambat',
                        'hilang' => 'Hilang',
                        'rusak' => 'Rusak',
                        'lainnya' => 'Lainnya',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('jumlah_denda')
                    ->label('Jumlah Denda')
                    ->numeric()
                    ->required(),
                Forms\Components\Select::make('status_pembayaran')
                    ->label('Status Pembayaran')
                    ->options([
                        'lunas' => 'Lunas',
                        'belum' => 'Belum',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('peminjaman.id')->label('ID Peminjaman'),
                Tables\Columns\TextColumn::make('anggota.nama')->label('Anggota'),
                Tables\Columns\TextColumn::make('jenis_denda')->label('Jenis Denda'),
                Tables\Columns\TextColumn::make('jumlah_denda')->label('Jumlah Denda'),
                Tables\Columns\TextColumn::make('status_pembayaran')->label('Status Pembayaran'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListDendas::route('/'),
            'create' => Pages\CreateDenda::route('/create'),
            'edit' => Pages\EditDenda::route('/{record}/edit'),
        ];
    }
}
