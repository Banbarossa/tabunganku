<div>
    <h3>Tambah Santri</h3>
    <hr class="mb-3">
    <form action="" wire:submit.prevent="store">
        <div class="mb-3 mt-4">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" wire:model="nama">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"" id="tempat_lahir" wire:model="tempat_lahir">
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mt-4 d-flex">
            <button type="submit" class="btn btn-primary ms-auto px-5"><span  wire:loading wire:target="store" class="me-2"><i class="lni lni-spinner"></i></span> Tambah</button>
        </div>
    </form>
</div>
