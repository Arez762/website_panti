<?php

namespace App\Filament\Resources\CategoryResource\Widgets;

use App\Models\News;
use App\Models\Category;
use Filament\Widgets\ChartWidget;

class NewsChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Views per Kategori';

    protected function getData(): array
    {
        // Ambil data views per kategori
        $viewsPerCategory = News::selectRaw('category_id, SUM(views) as total_views')
            ->where('status', 'publish')
            ->groupBy('category_id')
            ->get();

        // Siapkan data untuk chart
        $labels = [];
        $data = [];

        foreach ($viewsPerCategory as $item) {
            // Ambil nama kategori berdasarkan category_id
            $category = Category::find($item->category_id);
            $labels[] = $category ? $category->name : 'Unknown';
            $data[] = $item->total_views;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Views',
                    'data' => $data,
                    'backgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#FF9F40',
                    ],
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
