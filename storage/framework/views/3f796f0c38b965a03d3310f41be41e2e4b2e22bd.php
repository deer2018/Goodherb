

<?php $__env->startSection('content'); ?>
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถามเครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก</div>
                    <div class="card-body">

                <!--เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก 26 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <?php echo $__env->make('questionnaire.quest26', ['formMode' => 'volunteer_questionnaire_sub3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="<?php echo e(url('/volunteer_questionnaire_sub2')); ?>" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
                <div class="col" style="text-align: right">
                <a href="<?php echo e(url('/volunteer_questionnaire_sub4')); ?>" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                </div>
                </div>
                </td>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/volunteer_questionnaire_sub3.blade.php ENDPATH**/ ?>