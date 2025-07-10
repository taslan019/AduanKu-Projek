<?php

namespace App\Livewire;

use App\Models\Aduan;
use App\Models\Layanan;
use Livewire\Component;
use Filament\Forms\Form;
use App\Models\Organisasi;
use Illuminate\Support\Str;
use Filament\Forms\Components\Card;
use App\Mail\TicketConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;

class Home extends Component implements HasForms
{

    use InteractsWithForms;


    // Properti untuk menyimpan nilai input form
    public $nama;
    public $no_hp;
    public $email;
    public $id_layanan = null;
    public $id_organisasi = null;
    public $deskripsi;
    public $no_tiket = null;
    public $status = 'baru'; // Default status 'baru'

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                        TextInput::make('nama')->required()->maxLength(255),
                        TextInput::make('no_hp')->required(),
                        TextInput::make('email')->required()->email(),
                        Select::make('id_layanan')
                            ->label('Layanan')
                            ->options(Layanan::all()->pluck('nama', 'id')),
                        Select::make('id_organisasi')
                            ->label('Organisasi')
                            ->options(Organisasi::all()->pluck('nama', 'id')),
                        Textarea::make('deskripsi')->required(),
                        Hidden::make('no_tiket')->default(fn() => 'TES-' . strtoupper(Str::random(6))),
                        Hidden::make('status')->default('baru'),
            ])->model(Aduan::class);
    }


    // public function render()
    // {
    //     return view('livewire.home');
    // }

    // public function save(): void
    // {
    //     $data = ($this->form->getState());

    //     // Menggunakan create() agar Observer terpanggil dan ID dihasilkan
    //     $aduan = Aduan::create($data);

    //     // Reset form setelah sukses
    //     $this->form->fill();
    // }

    // Metode mount untuk menginisialisasi properti form saat komponen dimuat
    public function mount(): void
    {
        $this->form->fill();
    }

    public function render()
    {
        // Ambil data layanan dan organisasi untuk dilewatkan ke view
        $layanans = Layanan::all();
        $organisasis = Organisasi::all();

        return view('livewire.home', [
            'layanans' => $layanans,
            'organisasis' => $organisasis,
        ]);
    }

    public function save(): void
    {
        // Validasi data form menggunakan schema yang telah didefinisikan
        $data = $this->form->getState();

        // Jika no_tiket belum diset oleh Hidden field (misalnya karena tidak ada di form HTML),
        // bisa di-generate di sini
        if (empty($data['no_tiket'])) {
            $data['no_tiket'] = 'TES-' . strtoupper(Str::random(6));
        }

        // Simpan aduan ke database
        $aduan = Aduan::create($data);

        // --- Bagian PENTING: Kirim Email ---
        // Panggil Mailable class dan kirim ke email pelapor
        Mail::to($aduan->email)->send(new TicketConfirmationMail($aduan));

        // Reset form setelah sukses
        $this->form->fill();

        // Tambahkan pesan sukses
        session()->flash('message', 'Aduan berhasil dikirim! Konfirmasi tiket telah dikirim ke email Anda.');
    }
}
