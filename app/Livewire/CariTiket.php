<?php

namespace App\Livewire;

use App\Models\Aduan;
use Livewire\Component;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class CariTiket extends Component implements HasForms
{

    use InteractsWithForms;

    // Properti untuk menyimpan nomor tiket yang dicari
    public ?string $no_tiket = '';

    // Properti untuk menyimpan hasil aduan yang ditemukan
    public $foundAduan = null;

    // Properti untuk menyimpan pesan error atau info
    public ?string $message = null;

    // Filament Form Schema (opsional, tapi bagus untuk validasi)
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no_tiket')
                    ->label('Nomor Tiket')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: TES-ABCDEF'),
            ]);
    }

    // Metode untuk mencari tiket
    public function searchTicket(): void
    {
        // Validasi input menggunakan Filament form schema
        $this->validate([
            'no_tiket' => 'required|string|max:255',
        ]);

        $this->foundAduan = null; // Reset hasil sebelumnya
        $this->message = null; // Reset pesan sebelumnya

        $aduan = Aduan::where('no_tiket', $this->no_tiket)->first();

        if ($aduan) {
            $this->foundAduan = $aduan;
            $this->message = 'Tiket ditemukan!';
        } else {
            $this->message = 'Tiket dengan nomor ' . $this->no_tiket . ' tidak ditemukan.';
        }
    }

    // Metode untuk mereset pencarian
    public function resetSearch(): void
    {
        $this->no_tiket = '';
        $this->foundAduan = null;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.cari-tiket');
    }
}
