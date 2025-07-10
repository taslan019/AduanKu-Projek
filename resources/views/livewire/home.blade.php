{{-- <div>
    <form method="post" wire:submit="save"  class="form-control" >
        {{ $this->form }}
        <button type="submit" class="btn btn-primary" >Kirim</button>
    </form>
</div> --}}

<div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div>
                    <h2 class="text-center mb-4">Form Pendaftaran Aduan</h2>

                    {{-- Pesan sukses --}}
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Form Livewire --}}
                    <form wire:submit.prevent="save">
                        <!-- Input Nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" wire:model.defer="nama" maxlength="255" required>
                            @error('nama') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Input No. HP -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">Nomor HP</label>
                            <input type="tel" class="form-control" id="no_hp" wire:model.defer="no_hp" required>
                            @error('no_hp') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Input Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model.defer="email" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Select Layanan -->
                        <div class="mb-3">
                            <label for="id_layanan" class="form-label">Layanan</label>
                            <select class="form-select" id="id_layanan" wire:model.defer="id_layanan">
                                <option value="">Pilih Layanan</option>
                                @foreach($layanans as $layanan)
                                    <option value="{{ $layanan->id }}">{{ $layanan->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_layanan') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Select Organisasi -->
                        <div class="mb-3">
                            <label for="id_organisasi" class="form-label">Organisasi</label>
                            <select class="form-select" id="id_organisasi" wire:model.defer="id_organisasi">
                                <option value="">Pilih Organisasi</option>
                                @foreach($organisasis as $organisasi)
                                    <option value="{{ $organisasi->id }}">{{ $organisasi->nama }}</option>
                                @endforeach
                            </select>
                            @error('id_organisasi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Textarea Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" wire:model.defer="deskripsi" rows="5" required></textarea>
                            @error('deskripsi') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Hidden Input untuk Status tidak perlu secara eksplisit di HTML jika sudah ada di properti Livewire -->
                        {{-- <input type="hidden" name="status" value="baru"> --}}

                        <!-- Tombol Submit -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
