<?php

namespace App\Filament\Admin\Resources\LoanResource\Pages;

use App\Filament\Admin\Resources\LoanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLoan extends CreateRecord
{

    protected static string $resource = LoanResource::class;

    protected function afterCreate(): void
    {
        $loan = $this->getRecord();
        $book = $loan->book;

        if ($book->stock > 0) {
            $book->decrement('stock');
        }
    }
}
