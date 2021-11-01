

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800">ข้อมูลของ<a class="m-1 font-weight-bold text-primary">
                    <?php echo e($users->username); ?></a> ครั้งที่ 1</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">


            <!-- แบบวัดความเครียดของผู้ดูแล -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">แบบวัดความเครียดของผู้ดูแล</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase "><?php echo e($_qt_1->group); ?></div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;"><?php echo e($_qt_1->total); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo $__env->make('medic.medic_volunteer.quest1.medic_quest1_5', ['formMode' => 'predicate1.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>

            <!-- แบบประเมินความเครียด -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">แบบประเมินความเครียด</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase "><?php echo e($_qt_2->group); ?></div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;"><?php echo e($_qt_2->total); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo $__env->make('medic.medic_volunteer.quest1.medic_quest1_5', ['formMode' => 'predicate1.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>


            <!-- เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลกชุดย่อ จำนวน 26 ข้อคำถาม -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">เครื่องชี้วัดคุณภาพชีวิต</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase "><?php echo e($_qt_3->group); ?></div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;"><?php echo e($_qt_3->total); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo $__env->make('medic.medic_volunteer.quest1.medic_quest1_26', ['formMode' => 'predicate1.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>


            <!-- แบบสอบถามคัดเลือก -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-gray-800 h6 font-weight-bold">
                                    แบบสอบถามคัดเลือก</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase"><?php echo e($_qt_4->group); ?></div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;"><?php echo e($_qt_4->total); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <?php echo $__env->make('medic.medic_volunteer.quest1.medic_quest1_select', ['formMode' => 'predicate1.blade'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->
        <div class="row">


            <!-- แสดงข้อมูล ภาวะอารมณ์ -->
            <div class="col-lg-6">

                <div class="card position-relative shadow h-100  border-bottom-success">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">
                            ขั้นตอนการวิเคราะห์เพื่อให้ได้ตัวยาที่คล้ายกับอาการที่ผู้ป่วยเป็น</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto text-gray-800 h6 font-weight-bold">ภาวะอารมณ์</div>
                            <div class="col-auto text-gray-800 h6 font-weight-bold">
                                <?php if (empty($emotion['emotion'])) {
                                    echo "กรุณาเลือกภาวะอารมณ์";} 
                                        else {
                                    echo $emotion['emotion'];}?></div>
                        </div><br>
                        <div class="mb-2">
                            <a href="<?php echo e(url('/medic_emotion')); ?>" title="View Crud"><button class="btn btn-success  btn-block"><i
                                        class="" aria-hidden="true"></i>เลือกภาวะอารมณ์</button></a>
                        </div>

                        

                    </div>
                </div>
            </div>

            <!-- แสดงข้อมูล ดอกไม้ -->
            <div class="col-lg-6">

                <div class="card position-relative shadow h-100 border-bottom-info">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">ขั้นตอนการเลือกความแรงของยา</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-auto text-gray-800 h6 font-weight-bold">ตัวยา</div>
                        </div><br>
                        <div class="mb-2">
                            <a href="<?php echo e(url('/medicine')); ?>" title="View Crud"><button class="btn btn-info  btn-block"><i class="btn-block" aria-hidden="true"></i>เลือกยาจากดอกไม้</button></a>
                        </div>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
       
                <!-- Content Row -->
            <div class="row">
=======
        </div><br>

>>>>>>> 20b966033dd334902b816d27a130989b1d18f861


        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card position-relative shadow h-100 border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">คำแนะนำของแพทย์</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(url('/predicate1/' . $users->id )); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(method_field('POST')); ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="form-group <?php echo e($errors->has('advice') ? 'has-error' : ''); ?>">
                                <label for="advice" class="control-label"><?php echo e('รายละเอียด'); ?></label>
                                <textarea class="form-control" name="advice" type="text" id="advice" value="<?php echo e(isset($diagnosis->advice) ? $diagnosis->advice : ''); ?>">
                                <?php echo $errors->first('advice', '<p class="help-block">:message</p>'); ?></textarea>
                            </div><br>
                            <button type="submit" class="btn btn-primary btn-user btn-block"> บันทึก </button>
                        </form>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        
=======
        </div>

>>>>>>> 20b966033dd334902b816d27a130989b1d18f861
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/verify/predicate1.blade.php ENDPATH**/ ?>