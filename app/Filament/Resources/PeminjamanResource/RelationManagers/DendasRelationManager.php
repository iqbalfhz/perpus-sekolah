<?php

namespace App\Filament\Resources\PeminjamanResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class DendasRelationManager extends RelationManager
{
    protected static string $relationship = 'dendas';

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis_denda')->label('Jenis Denda'),
                Tables\Columns\TextColumn::make('jumlah_denda')->label('Jumlah Denda'),
                Tables\Columns\TextColumn::make('status_pembayaran')->label('Status Pembayaran'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status_pembayaran')
                    ->label('Status Pembayaran')
                    ->options([
                        'lunas' => 'Lunas',
                        'belum' => 'Belum',
                    ]),
            ]);
    }
}
