<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แอปพลิเคชัน เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้
            ตามสูตรของบาคของผู้ดูแลผู้สูงอายุที่มีภาวะพึ่งพิง</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #4e73df;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
            }

            .title {
                font-size: 36px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 60px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md" font-size>
                แอปพลิเคชัน เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้
                <br>ตามสูตรของบาคของผู้ดูแลผู้สูงอายุที่มีภาวะพึ่งพิง
                </div>

             
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/welcome.blade.php ENDPATH**/ ?>