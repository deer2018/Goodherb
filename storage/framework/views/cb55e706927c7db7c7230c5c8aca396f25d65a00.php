

<?php $__env->startSection('content'); ?>
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามเครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก</div>
            <div class="card-body">

                <!--เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก 26 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="GET" action="#" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <?php echo $__env->make('questionnaireone.quest26', ['formMode' => 'volunteer_questionnaire_sub3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    <a href="<?php echo e(url('/medic_quest5')); ?>" class="btn btn-success btn-sm" title="Go_Back">
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
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/quest1/medic_quest26.blade.php ENDPATH**/ ?>