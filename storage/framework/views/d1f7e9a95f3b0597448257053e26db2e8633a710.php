

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
                        <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           <h6>แบบสอบถามคัดเลือก</h6></div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <h6>แบบวัดความเครียดของผู้ดูแล</h6></div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">ระดับต่ำ (1-3 คะแนน)</div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">ระดับปานกลาง (4-6 คะแนน)</div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">ระดับสูง (7-13 คะแนน)</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        <h6>แบบประเมินความเครียด</h6></div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">เครียดน้อย (0-4 คะแนน)</div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">เครียดปานกลาง (5-7 คะแนน)</div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">เครียดมาก (8-9 คะแนน)</div>
                                        <div class="text-xs mb-1 font-weight-bold text-gray-800">เครียดมากที่สุด (10-15 คะแนน)</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                       <!-- เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลกชุดย่อ จำนวน 26 ข้อคำถาม -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        <h6>เครื่องชี้วัดคุณภาพชีวิต</h6></div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
        
                    <!-- แสดงข้อมูล ภาวะอารมณ์ -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">วินิจฉัย</h6></div>          
                                    <form method="GET" action="#" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                        <?php echo $__env->make('questionnaireone.quest_medic', ['formMode' => 'precidate.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="col" style="text-align: center">
                                    <input class="btn btn-primary" type="submit" value="ยืนยัน">
                                </div></br>
                                    </form>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">วินิจฉัย</h6></div>          
                                    <form method="GET" action="#" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                    <?php echo e(csrf_field()); ?>

                                        <?php echo $__env->make('questionnaireone.quest_medicine', ['formMode' => 'precidate.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="col" style="text-align: center">
                                    <input class="btn btn-primary" type="submit" value="ยืนยัน">
                                </div></br>
                                    </form>
                    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/verify/predicate.blade.php ENDPATH**/ ?>