<div>
    <h3 class="mb3">Update Admin</h3>
    <hr>
    <form action="" wire:submit.prevent="update">  
        {{-- <input type="hidden" class="form-control @error('student_id') is-invalid @enderror"  --}}
        <div class="mb-3 mt-2">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" wire:model="nama">
                @error('nama')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        {{-- <input type="text" wire:model="kredit"> --}}
        <div class="mb-3 mt-2">
            <label for="email" class="form-label">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" wire:model="email">
                @error('email')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        <div class="mb-3 mt-2">
            <label for="role" class="form-label">Role</label>
            <select wire:model="role" class="form-select @error('role') is-invalid @enderror" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="Admin">Admin</option>
                <option value="Manager">Manager</option>
            </select>
                @error('role')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        <div class="mb-3 mt-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" wire:model="password">
                @error('password')
                    <div class="invalid-feedback">
                            {{ $message }}
                    </div>
                 @enderror
        </div>
        

       
        <div class="mt-4 d-flex justify-content-between">
            <button type="button" wire:click="$emit('userAdd')" class="btn btn-secondary px-5">Cancel</button>
            <button type="submit" class="btn btn-primary px-5">Submit</button>
        </div>
    </form>

</div>
