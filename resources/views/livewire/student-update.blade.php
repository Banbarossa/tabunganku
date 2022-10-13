<div>
    <h3>Update Santri</h3>
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
        <div class="mt-4 d-flex justify-content-between">
            <button type="button" wire:click="cancel" class="btn btn-secondary ms-auto px-5">Cancel</button>
            <button type="submit" class="btn btn-primary ms-auto px-5">Update</button>
        </div>
    </form>
</div>
