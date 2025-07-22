<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LoanResource\Pages;
use App\Filament\Admin\Resources\LoanResource\RelationManagers;
use App\Models\Loan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Book; // Tambahkan ini
use Illuminate\Database\Eloquent\Model; 

class LoanResource extends Resource
{
    protected static ?string $model = Loan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Select::make('book_id')
                ->relationship('book', 'title')
                ->searchable()
                ->preload()
                ->required(),
            Forms\Components\Select::make('member_id')
                ->relationship('member', 'name')
                ->searchable()
                ->preload()
                ->required(),
            Forms\Components\DatePicker::make('loan_date')
                ->required()
                ->default(now()),
            Forms\Components\DatePicker::make('due_date')
                ->required()
                ->default(now()->addWeeks(2)),
            Forms\Components\DatePicker::make('return_date'),
            Forms\Components\Select::make('status')
                ->options([
                    'Borrowed' => 'Borrowed',
                    'Returned' => 'Returned',
                ])
                ->required()
                ->default('Borrowed')
                ->live(), // Penting untuk logika dinamis
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('book.title')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('member.name')->searchable()->sortable(),
            Tables\Columns\TextColumn::make('loan_date')->date('d M Y'),
            Tables\Columns\TextColumn::make('status')
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'Borrowed' => 'warning',
                    'Returned' => 'success',
                }),
]); // ... actions & bulkActions
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
            'index' => Pages\ListLoans::route('/'),
            'create' => Pages\CreateLoan::route('/create'),
            'edit' => Pages\EditLoan::route('/{record}/edit'),
        ];
    }
}
