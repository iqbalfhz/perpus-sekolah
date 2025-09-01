<?php

namespace App\Filament\Resources\AnggotaResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class PeminjamenRelationManager extends RelationManager
{
    protected static string $relationship = 'peminjamen';

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('buku.judul')->label('Buku'),
                Tables\Columns\TextColumn::make('tanggal_pinjam')->label('Tgl Pinjam'),
                Tables\Columns\TextColumn::make('tanggal_jatuh_tempo')->label('Jatuh Tempo'),
                Tables\Columns\TextColumn::make('tanggal_kembali')->label('Tgl Kembali'),
                Tables\Columns\TextColumn::make('status')->label('Status'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'dipinjam' => 'Dipinjam',
                        'dikembalikan' => 'Dikembalikan',
                        'hilang' => 'Hilang',
                        'rusak' => 'Rusak',
                    ]),
            ]);
    }
}
