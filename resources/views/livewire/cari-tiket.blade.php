<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div>
                    <h2 class="text-center mb-4">Cari Tiket Aduan</h2>

                    {{-- Pesan informasi/error --}}
                    @if ($message)
                        <div class="alert {{ $foundAduan ? 'alert-success' : 'alert-warning' }} alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Pencarian Livewire --}}
                    <form wire:submit.prevent="searchTicket">
                        <div class="mb-3">
                            <label for="no_tiket" class="form-label">Masukkan Nomor Tiket</label>
                            <input type="text" class="form-control" id="no_tiket" wire:model.defer="no_tiket" placeholder="Contoh: TES-ABCDEF" required>
                            @error('no_tiket') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-primary me-md-2">Cari Tiket</button>
                            <button type="button" wire:click="resetSearch" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                    {{-- Hasil Pencarian --}}
                    @if ($foundAduan)
                        <div class="ticket-info mt-4">
                            <h5 class="mb-3">Detail Tiket</h5>
                            <p><strong>Nomor Tiket:</strong> {{ $foundAduan->no_tiket }}</p>
                            <p><strong>Nama Pelapor:</strong> {{ $foundAduan->nama }}</p>
                            <p><strong>Deskripsi:</strong> {{ $foundAduan->deskripsi }}</p>
                            <p><strong>Status:</strong>
                                <span class="status-badge
                                    @if($foundAduan->status == 'baru') status-baru
                                    @elseif($foundAduan->status == 'proses') status-proses
                                    @elseif($foundAduan->status == 'selesai') status-selesai
                                    @elseif($foundAduan->status == 'ditolak') status-ditolak
                                    @endif">
                                    {{ ucfirst($foundAduan->status) }}
                                </span>
                            </p>
                            {{-- Anda bisa menambahkan detail lain dari $foundAduan di sini --}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
