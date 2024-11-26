<?php

namespace App\Filament\Resources\CategoryResource\Widgets;

use App\Models\News;
use App\Models\User;
use Filament\Widgets\ChartWidget;

class NewsByUserChart extends ChartWidget
{
    protected static ?string $heading = 'Jumlah Publish per User';

    protected function getData(): array
    {
        // Ambil data jumlah publish per user
        $publishCountPerUser = News::selectRaw('user_id, COUNT(*) as total_publish')
            ->where('status', 'publish')
            ->groupBy('user_id')
            ->get();

        // Siapkan data untuk chart
        $labels = [];
        $data = [];

        foreach ($publishCountPerUser as $item) {
            // Ambil nama user berdasarkan user_id
            $user = User::find($item->user_id);
            $labels[] = $user ? $user->name : 'Unknown';
            $data[] = $item->total_publish;
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Publish',
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
        return 'bar'; // Menggunakan chart tipe 'bar' untuk tampilan yang lebih sesuai
    }
}
