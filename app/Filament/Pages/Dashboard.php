<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use App\Filament\Widgets\AdminOverview;
use App\Filament\Widgets\AdminStats;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    public function filtersForm(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        DatePicker::make('startDate')->label('Tanggal Mulai'),
                        DatePicker::make('endDate')->label('Tanggal Akhir'),
                    ])
                    ->columns(2),
            ]);
    }

    public function getWidgets(): array
    {
        return [
            AdminOverview::class,
            AdminStats::class,
        ];
    }
}
