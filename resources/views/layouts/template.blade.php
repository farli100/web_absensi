<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Absensi</title>
  <link rel="icon" href="{{ asset('assets/img/logo_labict2.png') }}" type="image/logo_labict2" />

  <!-- Fonts and icons -->
  <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css')}}">
  <style>
    .display-4 {
      margin-top: 20px;
    }
  </style>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>

<body>



  <div class="wrapper">

    <div class="main-header">

      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue">
        <a href="{{ url('dashboard') }}" class="logo">
          <!-- <img src="../assets/img/mts.png" alt="navbar brand" class="navbar-brand" width="40"> -->
          <b class="text-white">Website Presensi</b>
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

                                       <!-- nav bar -->
      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
        <div class="container-fluid">
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="dropdown">
                <i class="fa fa-calendar"></i>
                <span id="todayDate"></span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Navbar -->


    <!-- side bar -->
    <div class="sidebar sidebar-style-2">

      <div class="sidebar-wrapper scrollbar scrollbar-inner">

        <div class="sidebar-content">
          <ul class="nav nav-primary">

            <li class="nav-item active">
              <a href="{{ url('dashboard') }}" class="collapsed">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section">Main Menu</h4>
            </li>

            <li class="nav-item">
              <a data-toggle="collapse" href="#presensi">
                <i class="fas fa-user-friends"></i>
                  <p>Presensi</p>
                <span class="caret"></span>
              </a>

              <div class="collapse" id="presensi">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{ url('presensi_calas') }}">
                      <span class="sub-item">Calas</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('presensi_asisten') }}">
                      <span class="sub-item">Asisten</span>
                    </a>
                  </li>
                </ul>
              </div>

            </li>

            <li class="nav-item">
              <a data-toggle="collapse" href="#about">
                <i class="fas fa-user-friends"></i>
                <p>About</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="about">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="/about">
                      <span class="sub-item">Tentang Kami </span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="?page=about&act=add ">
                      <span class="sub-item">Tentang Aplikasi Ini </span>
                    </a>
                  </li> -->
                </ul>
              </div>
            </li>
            <li class="nav-item active mt-3">
              <a href="{{ url('/session') }}" class="collapsed">
                <i class="fas fa-arrow-alt-circle-right"></i>
                <p>Login</p>
              </a>
            </li>

            {{-- <li class="nav-item active mt-3">
              <a href="{{ url('/session/logout') }}" class="collapsed">
                <i class="fas fa-arrow-alt-circle-left"></i>
                <p>Logout</p>
              </a>
            </li> --}}

          </ul>
        </div>

      </div>
    </div>

    <div class="main-panel">

     <div class="content">

        {{-- @include('component.massage') --}}

        @yield('kontenDashboard')

        <div class="page-inner">
        @include('component.massage')

        @yield('konten')
        </div>

    </div>

  </div>

</div> 

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2023 by Kelompok 3:
    <a href="{{ url('/dashboard') }}"> Web Absensi LAB ICT 2023</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

{{-- <footer class="container-fluid bg-light py-3">
  <div class="row">
    <div class="col-md-12">
      <p class="text-center">© 2023 by Kelompok 3</p>
    </div>
  </div>
</footer> --}}

<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $('#basic-datatables').DataTable();
});
</script>
<script>
var today = new Date();
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
var date = today.toLocaleDateString('en-US', options);
document.getElementById('todayDate').innerHTML = date;
</script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Atlantis JS -->
<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>

<!-- Atlantis DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/setting-demo.js') }}"></script>

</body>
 
</html>
 
