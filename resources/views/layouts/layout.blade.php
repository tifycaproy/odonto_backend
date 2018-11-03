<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistema Odontológico</title>
  <!-- plugins:css -->
 <link rel="stylesheet" href="{{ asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') }}">
 <link rel="stylesheet" href="{{ asset('js/alertifyjs/css/alertify.min.css') }}">
 <link rel="stylesheet" href="{{ asset('js/alertifyjs/css/themes/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 {{--   <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.addons.css') }}"> --}}

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div id="app" class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    @include('layouts.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('layouts.menu')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body p-3">
                    <div class="d-flex justify-content-between">
                      <a href="@yield('link-back')" class="btn btn-icons btn-inverse-primary @yield('class-back')">
                        <i class="fa fa-arrow-left"></i>
                      </a>
                      <h2>@yield('titulo')</h2>
                      <a href="@yield('link-new')" class="btn btn-icons btn-inverse-primary @yield('class-new')">
                        <i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              
              @yield('content')

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              {{-- <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.--}}</span> 
           {{--  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span> --}}
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <!-- End custom js for this page-->
  <script src="{{ asset('js/app.js') }}"></script>

  <script src="{{ asset('js/alertifyjs/alertify.js') }}"></script>

  @include('alertify::alertify')
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  @stack('scripts')
</body>

</html>