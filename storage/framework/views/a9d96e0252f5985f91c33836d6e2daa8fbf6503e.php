<!DOCTYPE html>
<html lang="en">
 
<head>
 
  <?php echo $__env->make('layouts.volunteer.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
</head>

<body id="page-top">
 
  <!-- Page Wrapper -->
  <div id="wrapper">
 
    <?php echo $__env->make('layouts.volunteer.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
 
      <!-- Main Content -->
      <div id="content">
 
          <?php echo $__env->make('layouts.volunteer.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
        <!-- Begin Page Content -->
        <div class="container-fluid">
 
            <?php echo $__env->yieldContent('content'); ?>
 
        </div>
        <!-- /.container-fluid -->
 
      </div>
      <!-- End of Main Content -->
 
      <?php echo $__env->make('layouts.volunteer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
    </div>
    <!-- End of Content Wrapper -->
 
  </div>
  <!-- End of Page Wrapper -->
 
   
<?php echo $__env->make('layouts.volunteer.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>
 
</html><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/layouts/volunteer/main.blade.php ENDPATH**/ ?>