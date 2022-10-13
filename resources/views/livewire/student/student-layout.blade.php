<div class="container-fluid">
    <div class="title-wrapper pt-30">
        {{-- nothing here --}}
    </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== form-elements-wrapper start ========== -->
      <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <!-- input style start -->
                <div class="card-style">
                    <livewire:student-index/>
                </div>
                <!-- end card -->
            </div>
          <!-- end col -->
            <div class="col-lg-4 mb4">
                <!-- ======= textarea style start ======= -->
                <div class="card-style">
                    @if ($showForm)
                        <livewire:student-update/>
                    @else
                        <livewire:student-add/>     
                    @endif
                </div>
                <!-- ======= textarea style end ======= -->
            </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
</div>
