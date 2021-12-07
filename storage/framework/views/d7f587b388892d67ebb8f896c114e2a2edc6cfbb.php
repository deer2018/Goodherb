

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold ">แบบสอบถามของ <a
                        class="m-1 font-weight-bold text-primary"><?php echo e($users->username); ?></a> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>แบบสอบถาม</th>
                                <th>การประเมิน</th>
                                <th>แบบประเมินการรับประทานยา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>แบบสอบถามครั้งที่ 1</td>
                                <td><a href="<?php echo e(url('/predicate1/' . $users->id)); ?>" title="Click"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>ประเมินครั้งที่ 1</button></a></td>
                                <td><a href="<?php echo e(url('/check_m1/' . $users->id)); ?>" title="Click"><button class="btn btn-info btn-sm"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>การรับประทานยาครั้งที่
                                            1</button></a></td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>แบบสอบถามครั้งที่ 2</td>
                                <td><a href="<?php echo e(url('/predicate2/' . $users->id)); ?>" title="Back"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>ประเมินครั้งที่ 2</button></a></td>
                                <td><a href="<?php echo e(url('/check_m2/' . $users->id)); ?>" title="Click"><button class="btn btn-info btn-sm"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>การรับประทานยาครั้งที่
                                            2</button></a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/medic_volunteer_sub.blade.php ENDPATH**/ ?>