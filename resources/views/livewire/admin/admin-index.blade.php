<div class="container-fluid">
    <div class="title-wrapper pt-30">
        {{-- nothing here --}}
    </div>
      <!-- ========== title-wrapper end ========== -->

      <!-- ========== form-elements-wrapper start ========== -->
      <div class="form-elements-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <!-- input style start -->
                <div class="card-style mb-30">
                    <livewire:user.user-index/>
                </div>
                <!-- end card -->
            </div>
          <!-- end col -->
            <div class="col-lg-4">
                <!-- ======= textarea style start ======= -->
                <div class="card-style mb-30">
                    @if ($editForm)
                        <livewire:user.user-update/>                     
                    @else
                        <livewire:user.user-add/>             
                    @endif
                </div>
                <!-- ======= textarea style end ======= -->
            </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
</div>
