<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
    <title>TabunganKu</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    @livewireStyles
  </head>
  <body>
    <!-- ======== sidebar-nav start =========== -->
    @include('layouts.sidebar')
    <!-- ======== sidebar-nav end =========== -->

    <!-- ======== main-wrapper start =========== -->
    <main class="main-wrapper">
      <!-- ========== header start ========== -->
        @include('layouts.header')
      <!-- ========== header end ========== -->

      <!-- ========== content ========== -->
        @yield('content')
      <!-- ========== content========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed by <a
                  href="https://plainadmin.com"
                  rel="nofollow"
                  target="_blank"
                >
                  PlainAdmin
                </a> and Developed by Banbarossa
                  
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div
                class="
                  terms
                  d-flex
                  justify-content-center justify-content-md-end
                "
              >
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/polyfill.js"></script>
    <script src="/assets/js/main.js"></script>
    {{-- <script src="/assets/js/jquery.js"></script>
    <script src="{{ asset('assets/js/jquery.mask.min.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.uang').mask('000.000.000',{reverse:true})
      })

    </script> --}}
  </body>
</html>
