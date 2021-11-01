

<?php $__env->startSection('content'); ?>
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามวัดความเครียดของผู้ดูแล</div>
            <div class="card-body">

                <!--แบบสอบถามวัดความเครียดของผู้ดูแล 13 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="<?php echo e(url('/Q2')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <?php echo $__env->make('questionnaireone.quest13', ['formMode' => 'volunteer_questionnaire_sub1_2'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <td>
                            <div class="row">
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/Q2/volunteer_questionnaire_sub1_2.blade.php ENDPATH**/ ?>