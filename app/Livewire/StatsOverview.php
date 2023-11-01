<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Registry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
{
    $registry = Registry::get();
    $product = Product::get();

    return [
        Stat::make('Product Outputs', $registry->where('type','out')->count()),
        Stat::make('Quantity of Products', $product->sum('products_quantity')),
        Stat::make('Product Entrys', $registry->where('type','entry')->count()),
    ];
}
}
