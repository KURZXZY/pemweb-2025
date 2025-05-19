<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AkademikResource\Pages;
use App\Filament\Admin\Resources\AkademikResource\RelationManagers;
use App\Models\Akademik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AkademikResource extends Resource
{
    protected static ?string $model = Akademik::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Nama'),
                Forms\Components\TextInput::make('kode')
                    ->required()
                    ->label('Kode'),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi'),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->label('Tanggal Mulai'),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->label('Tanggal Selesai'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kode')
                    ->label('Kode')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->date(),
                Tables\Columns\TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAkademiks::route('/'),
            'create' => Pages\CreateAkademik::route('/create'),
            'edit' => Pages\EditAkademik::route('/{record}/edit'),
        ];
    }
}
