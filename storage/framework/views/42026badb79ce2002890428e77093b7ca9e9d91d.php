

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Info <?php echo e($users->name); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/admin_volunteer/')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                        
                        </br><br>
                            <div class="col-md-4 ">
                                <img alt="" style="width:600px;" title=""  class="img-circle img-thumbnail isTooltip rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                            </div></br>  
                            
                            <a href="<?php echo e(url('/admin_volunteer/' . $users->id . '/edit')); ?>" title="Edit"><button class="btn btn-info btn-sm"><i class="" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
                            <br></br>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                <tbody>
                                    <tr><th>เลขลำดับอาสาสมัคร</th><td>1</td></tr>
                                    <tr><th>ชื่อ</th><td> <?php echo e($users->username); ?> </td></tr>
                                    <tr><th>นามสกุล</th><td> <?php echo e($users->surname); ?> </td></tr>
                                    <tr><th>เบอร์-มือถือ</th><td> <?php echo e($users->phone); ?> </td></tr>
                                    <tr><th>อายุ</th><td> <?php echo e($users->age); ?> </td></tr>
                                    <tr><th>เพศ</th><td> <?php echo e($users->sex); ?> </td></tr>
                                    <tr><th>ที่อยู่</th><td> <?php echo e($users->address); ?> </td></tr>
                                    <tr><th>สถานภาพสมรส</th><td> <?php echo e($users->relationship); ?> </td></tr>
                                    <tr><th>อาชีพ</th><td> <?php echo e($users->occupation); ?> </td></tr>
                                    <tr><th>รายได้ต่อเดือน</th><td> <?php echo e($users->income); ?> </td></tr>
                                    <tr><th>ระดับการศึกษา</th><td> <?php echo e($users->education); ?> </td></tr>
                                    <tr><th>ศาสนา</th><td> <?php echo e($users->religion); ?> </td></tr>
                                    <tr><th>เชื้อชาติ</th><td> <?php echo e($users->race); ?> </td></tr>
                                    <tr><th>ความเกี่ยวข้องกับผู้ป่วยที่ดูแล</th><td> <?php echo e($users->relevance); ?> </td></tr>                                   
                                </tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/admin/admin_volunteer/volunteer_show.blade.php ENDPATH**/ ?>