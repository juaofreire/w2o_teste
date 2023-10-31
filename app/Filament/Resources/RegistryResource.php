<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistryResource\Pages;
use App\Filament\Resources\RegistryResource\RelationManagers;
use App\Models\Registry;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistryResource extends Resource
{
    protected static ?string $model = Registry::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('product.category.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('employee.name')
                    ->searchable()
                    ->default('---'),
                Tables\Columns\TextColumn::make('initial_quantity'),
                Tables\Columns\TextColumn::make('alteration'),
                Tables\Columns\TextColumn::make('final_quantity')
                    ->State(function(Registry $record){
                        if($record->type=='entry'){
                            $data = $record->initial_quantity+$record->alteration;
                        } else {
                            $data = $record->initial_quantity-$record->alteration;
                        }
                        return $data;
                    }),
                Tables\Columns\TextColumn::make('type')
                    ->formatStateUsing(fn(string $state)=>Registry::TYPE[$state])
                    ->color(fn(string $state)=>Registry::TYPE_COLOR[$state])
                    ->badge()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                //
            ])
            ->emptyStateActions([
                //
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageRegistries::route('/'),
        ];
    }    
}
