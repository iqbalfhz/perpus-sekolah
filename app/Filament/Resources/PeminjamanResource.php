<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Filament\Resources\PeminjamanResource\RelationManagers;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path';
    protected static ?string $navigationGroup = 'Transaksi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('buku_id')
                    ->label('Buku')
                    ->relationship('buku', 'judul')
                    ->required(),
                Forms\Components\Select::make('anggota_id')
                    ->label('Anggota')
                    ->relationship('anggota', 'nama')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_pinjam')
                    ->label('Tanggal Pinjam')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_jatuh_tempo')
                    ->label('Tanggal Jatuh Tempo')
                    ->required(),
                    Forms\Components\DatePicker::make('tanggal_kembali')
                        ->label('Tanggal Kembali')
                        ->after('tanggal_pinjam')
                        ->rule('nullable|date|after_or_equal:tanggal_pinjam'),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'dipinjam' => 'Dipinjam',
                        'dikembalikan' => 'Dikembalikan',
                        'hilang' => 'Hilang',
                        'rusak' => 'Rusak',
                    ])
                    ->required(),
                Forms\Components\Select::make('jenis_denda')
                    ->label('Jenis Denda')
                    ->options([
                        'terlambat' => 'Terlambat',
                        'hilang' => 'Hilang',
                        'rusak' => 'Rusak',
                        'none' => 'Tidak Ada',
                    ]),
                Forms\Components\TextInput::make('jumlah_denda')
                    ->label('Jumlah Denda')
                    ->numeric(),
                Forms\Components\Select::make('tingkat_kerusakan')
                    ->label('Tingkat Kerusakan')
                    ->options([
                        'minimum' => 'Minimum',
                        'sedang' => 'Sedang',
                        'parah' => 'Parah',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('buku.judul')->label('Buku'),
                Tables\Columns\TextColumn::make('anggota.nama')->label('Anggota'),
                Tables\Columns\TextColumn::make('tanggal_pinjam')->label('Tgl Pinjam'),
                Tables\Columns\TextColumn::make('tanggal_jatuh_tempo')->label('Jatuh Tempo'),
                Tables\Columns\TextColumn::make('tanggal_kembali')->label('Tgl Kembali'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('jenis_denda')->label('Jenis Denda'),
                Tables\Columns\TextColumn::make('jumlah_denda')->label('Jumlah Denda'),
                Tables\Columns\TextColumn::make('tingkat_kerusakan')->label('Tingkat Kerusakan'),
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
                RelationManagers\DendasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeminjamen::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}
