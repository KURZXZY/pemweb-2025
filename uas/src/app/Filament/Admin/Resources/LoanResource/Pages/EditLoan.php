<?php

namespace App\Filament\Admin\Resources\LoanResource\Pages;

use App\Filament\Admin\Resources\LoanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLoan extends EditRecord
{
    protected static string $resource = LoanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    // app/Filament/Resources/LoanResource/Pages/EditLoan.php
protected function afterSave(): void
{
    $loan = $this->getRecord();

    // Cek jika status diubah menjadi 'Returned' dan tanggal kembali diisi
    if ($this->getRecord()->wasChanged('status') && $loan->status === 'Returned') {
         $loan->book->increment('stock');
    }
}
}
