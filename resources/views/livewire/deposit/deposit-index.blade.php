<div>
    <div class="header-transaksi title d-flex flex-wrap justify-content-between align-items-center p-3">
        <div class="left">
            <h3 class="text-bold">Riwayat Transaksi</h3>
        </div>
    </div>
  
  
      <div class="table-stripped table-responsive-sm">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Debet</th>
                <th scope="col">Kredit</th>
                <th scope="col">Teller</th>
              </tr>
            </thead>
            <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                      @if ($item->debet==0)
                        -
                      @else
                        Rp {{ number_format($item->debet,2,".",",") }}
                      @endif
                  </td>
                    <td>
                      @if ($item->kredit==0)
                          -
                      @else
                          Rp {{ number_format($item->kredit,2,".",",") }}</td>  
                      @endif
                    <td>{{ $item->teller }}</td>
                    <td>
                    
                      <button class="btn btn-danger" wire:click.prevent="confirm({{ $item->id }})"><i class="lni lni-trash-can"></i></button>
                    </td>
                  </tr>     
                @endforeach
    
              </tbody>
          </table>
      </div>
        <div class="d-flex justify-content-end">
          {{ $data->links() }}
        </div>
</div>
