<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class LaporanDenda extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Laporan';
    protected static string $view = 'filament.pages.laporan-denda';
}
