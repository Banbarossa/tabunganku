@extends('layouts.template')
@section('content')
    <section class="table-components">
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card-style mb-4">
                        <livewire:deposit.deposit-add :depositor="$depositor"/>
                        
                        <!-- End Chart -->
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-lg-8">
                    <div class="card-style mb-3">
                        <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                        >
                        </div>
                        <!-- End Title -->
                        <div class="chart">
                            <livewire:deposit.deposit-index :depositor="$depositor"/>
                        </div>

                    </div>
                    <!-- End Chart -->
                </div>
            </div>
    </div>
</section>

    {{-- Offcanvas start --}}
    {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h4 class="offcanvas-title mt-3" id="offcanvasExampleLabel">Tambah Data Santri</h4>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="divider">
        <div class="offcanvas-body"> --}}
          {{-- <livewire:student-add/> --}}
        {{-- </div>
      </div> --}}
    {{-- Offcanvas end --}}
  @endsection