

<?php $__env->startSection('content'); ?>




    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามประเมินการใช้ยา</div>
            <div class="card-body">

                <!--แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้ -->

                <div>
                    <form method="GET" action="<?php echo e(url('/check_m2'. $users->id)); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <?php echo $__env->make('medic.medic_questionnaire.quest3', ['formMode' => 'quest1_check_medicine'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                       
                    
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/verify/quest2_check_medicine.blade.php ENDPATH**/ ?>