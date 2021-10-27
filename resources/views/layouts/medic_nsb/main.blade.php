<!DOCTYPE html>
<html lang="en">
 
<head>
 
  @include('layouts.medic_nsb.head')
 
</head>

<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">
 
    
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
          @include('layouts.medic_nsb.navbar')
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
            @yield('content')
 
        </div>
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->
 
      @include('layouts.medic_nsb.footer')
 
    </div>
    <!-- End of Content Wrapper -->
 
  </div>
  <!-- End of Page Wrapper -->
 
    @include('layouts.medic_nsb.js')
    
</body>
 
</html>