

<?php $__env->startSection('content'); ?>
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบคัดเลือกอาสาสมัคร</div>
            <div class="card-body">

                <!--แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม -->

                
                    <form method="GET" action="<?php echo e(url('/medic_quest13')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <?php echo $__env->make('questionnaireone.quest3', ['formMode' => 'medic_quest3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    <a href="<?php echo e(url('/medic_volunteer_sub')); ?>" class="btn btn-success btn-sm" title="Go_Back">
                                        <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a>
                                </div>
                                <div class="col" style="text-align: right">

                                    <input class="btn btn-primary" type="submit" value="ถัดไป">

                                </div>
                            </div>
                        </td>
                    </form>
              

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/quest2/medic_quest3.blade.php ENDPATH**/ ?>