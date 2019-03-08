<!DOCTYPE html>
<html lang="en">

  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Doctor Finder Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">E-Doctor Finder</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            @if(Auth::check())
            <span>Welcome,{{Auth::user()->first_name}}</span>
            <a href="{{route('Logout')}}"><span>Logout</span></a>
            @else
              <a class="dropdown-item" href="login">Login</a>
              
            <a class="dropdown-item" href="register">Register</a>
            @endif
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctor_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Doctor</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patient_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Patient</span></a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="prescription_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Prescription</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="treatment_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Treatment</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="schedule_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Schedule</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="feedback_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Feedback</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="state_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>State</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="city_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>City</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="speciality_show">
            <i class="fas fa-fw fa-folder"></i>
            <span>Speciality</span></a>
        </li>

      </ul>
       <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol> 
         @yield("main-content")
       </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © E-Doctor Finder 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>

  </body>

</html>
