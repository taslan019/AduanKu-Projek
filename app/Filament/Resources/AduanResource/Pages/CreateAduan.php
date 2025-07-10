<?php

namespace App\Filament\Resources\AduanResource\Pages;

use App\Filament\Resources\AduanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAduan extends CreateRecord
{
    protected static string $resource = AduanResource::class;


    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Jika ini adalah operasi pembuatan (create), ID mungkin belum ada.
        // Kita akan set no_tiket nanti setelah ID tersedia.
        // Jika ini adalah operasi update, ID sudah ada.
        // Anda bisa menambahkan logika di sini jika no_tiket perlu diubah saat update.

        return $data;
    }

    protected function afterCreate(): void
    {
        // Dapatkan record yang baru saja dibuat
        $record = $this->getRecord(); // Ini akan memberikan instance model yang baru dibuat

        // Pastikan record ada dan memiliki ID
        if ($record && $record->id) {
            $eventCode = 'TIKET';
            $record->no_tiket = "{$eventCode}" . "-" . str_pad($record->id, 4, '0', STR_PAD_LEFT);
            $record->save(); // Simpan perubahan pada no_tiket
        }
    }
}
