<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Peminjaman;
use App\Models\Denda;
use App\Models\Anggota;
use App\Models\Buku;

class AdminStats extends ChartWidget
{
    protected static ?string $heading = 'Statistik Perpustakaan';

    public ?string $filter = 'month';

    protected function getFilters(): ?array
    {
        return [
            'week' => 'Mingguan',
            'month' => 'Bulanan',
            'year' => 'Tahunan',
        ];
    }

    protected function getData(): array
    {
        $filter = $this->filter;
        $start = now();
        $end = now();
        $interval = 'perMonth';
        if ($filter === 'week') {
            $start = now()->subWeeks(12);
            $interval = 'perWeek';
        } elseif ($filter === 'month') {
            $start = now()->subMonths(12);
            $interval = 'perMonth';
        } elseif ($filter === 'year') {
            $start = now()->subYears(5);
            $interval = 'perYear';
        }

        $peminjaman = Trend::model(Peminjaman::class)
            ->between(start: $start, end: $end)
           ->{$interval}()
            ->count();
        $denda = Trend::model(Denda::class)
            ->between(start: $start, end: $end)
            ->{$interval}()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Peminjaman',
                    'data' => $peminjaman->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Denda',
                    'data' => $denda->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $peminjaman->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
