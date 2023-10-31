<?php

namespace App\Livewire;

use App\Models\Registry;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TopProducts extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $topProducts = Registry::where('type', 'out')
            ->select('product_id', DB::raw('COUNT(*) as total'))
            ->groupBy('product_id')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        $productLabels = [];
        $productData = [];

        foreach ($topProducts as $product) {
            $productLabels[] = $product->product->name;
            $productData[] = $product->total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Products with the highest number of outputs',
                    'data' => $productData,
                ],
            ],
            'labels' => $productLabels,
        ];
    }

    protected int | string | array $columnSpan = 'full';

    protected function getType(): string
    {
        return 'bar';
    }
}
