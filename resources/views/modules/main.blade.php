<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="template/vendors/feather/feather.css">
  <link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/icons/psicoalianza.svg" />
</head>
<body>


  <div class="container-scroller">

    @include('modules.top')
  
    <!-- Container Principal -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">COLORES SIDEBAR</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">COLORES TOP</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      @include('modules.sidebar')      
      <!-- MENU -->
      
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="template/https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="template/https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- final MENU -->
    </div>   
    <!-- FINAL CONTAINER PRINCIPAL -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="template/vendors/chart.js/Chart.min.js"></script>
  <script src="template/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="template/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="template/js/off-canvas.js"></script>
  <script src="template/js/hoverable-collapse.js"></script>
  <script src="template/js/template.js"></script>
  <script src="template/js/settings.js"></script>
  <script src="template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="template/js/dashboard.js"></script>
  <script src="template/js/Chart.roundedBarCharts.js"></script>

  @yield('js')
  <!-- End custom js for this page-->
</body>

</html>

