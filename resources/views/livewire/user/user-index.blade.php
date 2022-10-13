<div> 
  <div 
    class="header-transaksi title d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div class="left ms-3">
            <h3 class="text-bold mb-10">Daftar Admin</h3>
        </div>
        <div class="right">
            <div class="card bg-secondary p-2">
                <h6 class="text-white">Jumlah Admin</h6>
                <h1 class="text-white text-bold">{{ count($users) }} Orang</h1>
            </div>
            <!-- end select -->
        </div>
    </div>
  
  
    <div class="table-stripped table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $users as $item)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->role_id }}</td>
                  <td>
                  
                    <button class="btn btn-warning" wire:click="editUser({{ $item->id }})"><i class="lni lni-pencil-alt"></i></button>

                    @if ($item->role_id == 'Manager')
                      <button class="btn btn-danger" wire:click="confirm({{ $item->id }})"><i class="lni lni-trash-can"></i></button>
                        
                    @endif
                  </td>
                </tr>     
                
            @endforeach

          </tbody>
      </table>
    </div>
        <div class="d-flex justify-content-end">
          {{ $users->links() }}
        </div>
</div>
