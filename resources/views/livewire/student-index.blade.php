<div>

    <div class="d-flex justify-content-between row align-items-center mb-3 header-transaksi py-3">
        <div class="col-4">
          <h3>Data Santri</h3>
        </div>
        <div class="col-6">
          <input type="text" class="form-control"placeholder="Search" wire:model="search">
        </div>
        {{-- <div class="col-4 d-flex justify-content-center">
          <button class="btn btn-primary ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">Tambah Santri</button>
        </div> --}}
    </div>


    <table class="table table-stripped table-responsive">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
              @foreach ($students as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tempat_lahir }}</td>
                <td>
                  <a href="{{ route('deposit.index',$item->id) }}" class="btn btn-success mb-1">Deposit</a>
                  <button class="btn btn-warning mb-1" wire:click.prevent="editStudent({{ $item->id }})"><i class="lni lni-pencil-alt"></i></button>
                  @can('isAdmin')
                  <button class="btn btn-danger mb-1" wire:click.prevent="confirm({{ $item->id }})"><i class="lni lni-trash-can"></i></button>
                  @endcan
                </td>
              </tr>     
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
        {{ $students->links() }}
      </div>
</div>
