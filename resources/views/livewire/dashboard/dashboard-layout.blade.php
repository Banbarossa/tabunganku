<div class="container-fluid">
    <div class="title-wrapper pt-30">
        {{-- nothing here --}}
    </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== form-elements-wrapper start ========== -->
      <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon purple">
                  <i class="lni lni-user"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Total Depositor</h6>
                  <h3 class="text-bold mb-10">{{ $students }}</h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon success">
                  <i class="lni lni-user"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Jumlah Admin</h6>
                  <h3 class="text-bold mb-10">{{ $admin }}</h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon primary">
                  <i class="lni lni-user"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Jumlah Manajer</h6>
                  <h3 class="text-bold mb-10">{{ $manager }}</h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="icon-card mb-30">
                <div class="icon orange">
                  <i class="lni lni-dollar"></i>
                </div>
                <div class="content">
                  <h6 class="mb-10">Jumlah Saldo</h6>
                  <h3 class="text-bold mb-10">Rp {{ number_format($saldo,0,".",",")}}</h3>
                </div>
              </div>
              <!-- End Icon Cart -->
            </div>
            <!-- End Col -->
          </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- input style start -->
                <div class="card-style mb-30">
                  <h5>IDENTITAS LEMBAGA</h5>
                  <hr>
                  <table class="table table-stripped mt-3">
                    <tr>
                      <td><h5>Nama Lembaga</h5></td>
                      <td><h5>:</h5></td>
                      <td><h5>{{ $lembaga->lembaga }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>NSPP</h5></td>
                      <td><h5>:</h5></td>
                      <td><h5>{{ $lembaga->nspp }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Nama Pimpinan</h5></td>
                      <td><h5>:</h5></td>
                      <td><h5>{{ $lembaga->pimpinan }}</h5></td>
                    </tr> 
                    <tr>
                      <td><h5>Alamat</h5></td>
                      <td><h5>:</h5></td>
                      <td><h5>{{ $lembaga->alamat }}</h5></td>
                    </tr> 
                  </table>  

                  <div class="d-flex justify-content-end">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit
                      </button>
                  </div>
                  
                </div>
                <!-- end card -->
            </div>
          <!-- end col -->
            <div class="col-lg-4">
                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">
                   <h5>My Profile</h5>
                   <hr>
                    <ul style="list-style: none;">
                        <li class="mb-3">
                            <h3>{{ ucfirst(auth()->user()->name )}}</h3>
                        </li>
                        <li class="mb-3">
                            <h6>{{ auth()->user()->email }}</h6>
                        </li>
                        <li class="mb-3">
                            <h6>{{ auth()->user()->role_id }}</h6>
                        </li>
                    </ul>

                    <hr>
                    @can('!isAdmin')
                        <small class="text-secondary mt-4">Perubahan data, silahkan hubungi admin anda</small>
                    @endcan

                </div>
                <!-- ======= textarea style end ======= -->
            </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>

      <!-- Modal -->
      <div class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content P-4">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Lembaga</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            
            <div class="modal-body">
              <form action="" wire:submit.prevent="ubahLembaga">
                <input type="text" class="form-control mb-3" wire:model="nama" placeholder="Nama Lembaga">
                <input type="nspp" class="form-control mb-3" wire:model="nspp" placeholder="NSPP">
                <input type="pimpinan" class="form-control mb-3" wire:model="pimpinan" placeholder="Nama Pimpinan">
                <input type="alamat" class="form-control mb-3" wire:model="alamat" placeholder="Alamat">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
</div>
