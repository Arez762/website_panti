<?php

namespace App\Filament\Resources\NewsResource\Widgets;

use App\Models\News;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        // Mengambil data yang diperlukan
        $totalViews = News::sum('views');
        $totalUploaded = News::where('status', 'draft')->count();
        $totalUploadedNews = News::where('status', 'publish')->count();

        // Mengembalikan data ke dalam format Stat untuk ditampilkan di widget
        return [
            Stat::make('Total Views', $totalViews)
                ->description('Total views dari semua berita')
                ->icon('heroicon-o-eye'),
            Stat::make('Total Draft', $totalUploaded)
                ->description('Perlu di Review')
                ->icon('heroicon-o-exclamation-circle'),
            Stat::make('Total Publish News', $totalUploadedNews)
                ->description('Jumlah berita dipublish')
                ->icon('heroicon-o-document'),
        ];
    }
}
