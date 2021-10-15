

<?php $__env->startSection('content'); ?>
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบคัดเลือกอาสาสมัคร</div>
                    <div class="card-body">

                <!--แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <?php echo $__env->make('questionnaire.quest_select', ['formMode' => 'volunteer_questionnaire_sub4'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="<?php echo e(url('/volunteer_questionnaire_sub3')); ?>" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
                <div class="col" style="text-align: right">
                <a href="<?php echo e(url('/volunteer_questionnaire_confirm')); ?>" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                </div>
                </div>
                </td>

</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/volunteer_questionnaire_sub4.blade.php ENDPATH**/ ?>