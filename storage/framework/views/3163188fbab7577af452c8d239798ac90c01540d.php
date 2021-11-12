

<?php $__env->startSection('content'); ?>

<script language="javascript">
    function delaler () {
        if (confirm('กรอกข้อมูลสำเร็จแล้ว')){
            return true;
        }
        else{
            return false;
        }
    }
</script>

    <div class="col-md-10">
        <div class="card">
            <div class="card-header">(4/4) แบบคัดเลือกอาสาสมัคร</div>
            <div class="card-body">

                <!--แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="<?php echo e(url('/Q1-4')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <?php echo $__env->make('questionnaireone.quest_select', ['formMode' => 'volunteer_questionnaire_sub4'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: right">

                                <input class="btn btn-primary" type="submit" onclick="return delaler();" value="ยืนยัน">

                                </div>
                            </div>
                        </td>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/Q1/volunteer_questionnaire_sub4.blade.php ENDPATH**/ ?>