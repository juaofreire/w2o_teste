<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Registry;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()->exports([
                ExcelExport::make('table')->fromTable(),
            ])
                ->color('danger'),
            Action::make('Create order')
                ->form([
                    Select::make('employee')->required()
                        ->native(false)
                        ->options(Employee::get()->pluck('name','id'))
                        ->preload(),
                    Select::make('product')->required()
                        ->native(false)
                        ->options(Product::get()->pluck('name','id'))
                        ->preload(),
                    TextInput::make('products_quantity')
                        ->required()
                        ->numeric()
                        ->maxValue(function(Get $get){
                            $product = Product::where('id',$get('product'))->first();
                            return $product->products_quantity ?? 0;
                        })
                        ->live(),
                ])
                ->action(function (array $data) {
                    try {
                        $product=Product::where('id',$data['product'])->first();
                        Registry::create([
                            'type'=>'out',
                            'initial_quantity'=>$product->products_quantity,
                            'alteration'=>$data['products_quantity'],
                            'product_id'=>$data['product'],
                            'employee_id'=>$data['employee'],
                            'user_id'=>Auth()->user()->id
                        ]);

                        $product->products_quantity-=$data['products_quantity'];
                        $product->save();

                        return Notification::make()
                                ->title('Saved successfully')
                                ->success()
                                ->send();
                    } catch (\Exception $th) {
                        return Notification::make()
                            ->title('Error when inserting product')
                            ->danger()
                            ->send();
                    }
                    
                })
                ->icon('heroicon-m-archive-box-x-mark')
                ->color('success'),

            Action::make('Add quantity')
                ->form([
                    Select::make('subject')->required()
                        ->native(false)
                        ->options(Product::get()->pluck('name','id'))
                        ->preload(),
                    TextInput::make('products_quantity')
                        ->required()
                        ->numeric()
                        ->maxValue(42949672),
                ])
                ->action(function (array $data) {
                    try {
                        $product=Product::where('id',$data['subject'])->first();
                        Registry::create([
                            'type'=>'entry',
                            'initial_quantity'=>$product->products_quantity,
                            'alteration'=>$data['products_quantity'],
                            'product_id'=>$data['subject'],
                            'user_id'=>Auth()->user()->id
                        ]);

                        $product->products_quantity+=$data['products_quantity'];
                        $product->save();

                        return Notification::make()
                                ->title('Saved successfully')
                                ->success()
                                ->send();
                    } catch (\Exception $th) {
                        return Notification::make()
                            ->title('Error when inserting product')
                            ->danger()
                            ->send();
                    }
                    
                })
                ->icon('heroicon-m-archive-box-arrow-down')
                ->color('info'),

            Actions\CreateAction::make()
                ->icon('heroicon-m-plus'),
        ];
    }
}
