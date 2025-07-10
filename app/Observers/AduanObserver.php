<?php

namespace App\Observers;

use App\Models\Aduan;

class AduanObserver
{
    /**
     * Handle the Aduan "created" event.
     */
    public function created(Aduan $aduan): void
    {
        // Pastikan ticket memiliki ID
        if ($aduan->id) {
            $eventCode = 'TIKET'; // Anda bisa membuat ini lebih dinamis jika perlu
            $aduan->no_tiket = "{$eventCode}" . "-" . str_pad($aduan->id, 4, '0', STR_PAD_LEFT);
            $aduan->save(); // Simpan perubahan pada no_tiket
        }
    }

    /**
     * Handle the Aduan "updated" event.
     */
    public function updated(Aduan $aduan): void
    {
        //
    }

    /**
     * Handle the Aduan "deleted" event.
     */
    public function deleted(Aduan $aduan): void
    {
        //
    }

    /**
     * Handle the Aduan "restored" event.
     */
    public function restored(Aduan $aduan): void
    {
        //
    }

    /**
     * Handle the Aduan "force deleted" event.
     */
    public function forceDeleted(Aduan $aduan): void
    {
        //
    }
}
