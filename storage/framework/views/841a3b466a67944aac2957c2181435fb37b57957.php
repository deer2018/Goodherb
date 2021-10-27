<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>แอปพลิเคชัน เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้
            ตามสูตรของบาคของผู้ดูแลผู้สูงอายุที่มีภาวะพึ่งพิง</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- form login -->
                     
                        
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><?php echo e(__('Login')); ?></h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                    <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                        <input id="email" type="email" class="form-control form-control-user" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="อีเมล">
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div  class="alert alert-danger alert-solid" role="alert">
                                                      ไอดีหรือรหัสผ่านผิดพลาด
                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                        <input id="password" type="password" class="form-control form-control-user" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div  class="alert alert-danger alert-solid" role="alert">
                                                    <h6 class="alert-heading">ไอดีหรือรหัสผ่านผิดพลาด</h6>
                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">

                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                                        <label class="custom-control-label" for="remember">
                                                            <?php echo e(__('จดจำฉันในเว็บไซต์')); ?>

                                                        </label>

                
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                        <?php echo e(__('เข้าสู่ระบบ')); ?>

                                        </button>
                                        
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                <?php if(Route::has('password.request')): ?>
                                    <a class="small" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('ลืมรหัสผ่านของคุณ?')); ?>

                                    </a>
                                <?php endif; ?>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo e(route('register')); ?>">สร้างไอดีและรหัสผ่าน!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/auth/login.blade.php ENDPATH**/ ?>