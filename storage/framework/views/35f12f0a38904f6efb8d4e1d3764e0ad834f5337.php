

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ผลการรักษา</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <thead>
                                <tr>
                                    <td>ชื่อ - สกุล</td>
                                    <td><a class="m-1 font-weight-bold text-primary"><?php echo e($users->username); ?></a><a class="m-1 font-weight-bold text-primary"><?php echo e($users->surname); ?></a></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ประเภท</td>
                                    <td><a class="m-1 font-weight-bold text-primary"><?php echo e(isset($qt->group) ? $qt->group : ""); ?></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>คำแนะนำของแพทย์ ครั้งที่ 1</td>
                                    <td><a class="m-1 font-weight-bold text-primary"><?php echo e(isset($me->advice) ? $me->advice : ""); ?></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>คำแนะนำของแพทย์ ครั้งที่ 2</td>
                                    <td><a class="m-1 font-weight-bold text-primary"><?php echo e(isset($me2->advice2) ? $me2->advice2 : ""); ?></a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>ภาวะอารมณ์</td>
                                    <td><a class="m-1 font-weight-bold text-primary"><?php echo e(isset($md->emotion_name) ?  $md->emotion_name : ""); ?></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_conclusion/volunteer_conclusion.blade.php ENDPATH**/ ?>