<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use App\Models\Buku;
use App\Models\Anggota;
use App\Models\Peminjaman;
use App\Models\Denda;

class AdminOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        return [
            Stat::make('Total Buku', Buku::count())
                ->description('Jumlah seluruh buku yang tersedia')
                ->icon('heroicon-o-book-open')
                ->color('primary'),
            Stat::make('Total Anggota', Anggota::count())
                ->description('Jumlah anggota terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('success'),
            Stat::make('Total Peminjaman Aktif', Peminjaman::where('status', 'dipinjam')
                ->when($startDate, fn ($q) => $q->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn ($q) => $q->whereDate('created_at', '<=', $endDate))
                ->count())
                ->description('Buku yang sedang dipinjam')
                ->icon('heroicon-o-arrow-path')
                ->color('warning'),
            Stat::make('Total Denda Belum Dibayar', Denda::where('status_pembayaran', 'belum_dibayar')
                ->when($startDate, fn ($q) => $q->whereDate('created_at', '>=', $startDate))
                ->when($endDate, fn ($q) => $q->whereDate('created_at', '<=', $endDate))
                ->count())
                ->description('Denda yang belum dibayar')
                ->icon('heroicon-o-exclamation-triangle')
                ->color('danger'),
        ];
    }
}
