<div>
    <div class="header-transaksi title text-center">
        <div class="">
            <h3 class="text-bold p-2">{{ $depositor->nama }}</h3>
        </div>
        <div class="bg-secondary px-3 py-1 rounded">
            <h6 class="text-white">Saldo</h6>
            <h2 class="text-white text-bold">Rp {{ $saldo }}</h2>
        </div>

    </div>
    <div class="mt-4">
        <h5>Tambah Transaksi</h5>
        <hr>
    </div>


    <form action="" wire:submit.prevent="store">  
        {{-- <input type="hidden" class="form-control @error('student_id') is-invalid @enderror"  --}}
        <div class="mb-3 mt-2">
            <label for="debet" class="form-label">Debet</label>
            <input type="text" class=" uang form-control @error('debet') is-invalid @enderror" id="debet" wire:model="debet">
                @error('debet')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        <div class="mb-3 mt-2">
            <label for="kredit" class="uang form-label">kredit</label>
            <input type="text" class="form-control @error('kredit') is-invalid @enderror" id="kredit" wire:model="kredit">
                @error('kredit')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        

       
        <div class="mt-4 d-flex">
            <button type="submit" class="btn btn-primary ms-auto px-3"><span wire:loading wire:target="store" class="me-2"><i class="lni lni-spinner"></i></span> Submit</button>
        </div>
    </form>
</div>
