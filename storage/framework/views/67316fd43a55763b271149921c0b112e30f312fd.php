
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Crud</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/medicine')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        <?php if($errors->any()): ?>
                            <ul class="alert alert-danger">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>

                        <form method="POST" action="<?php echo e(url('/medicine')); ?>" accept-charset="UTF-8" class="form-horizontal"
                            enctype="multipart/form-data">
                            <?php echo e(method_field('POST')); ?>

                            <?php echo e(csrf_field()); ?>


                            <?php echo $__env->make('medic.medic_volunteer.medicine.medicine_form', ['formMode' => 'medicine_create'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/medicine/medicine_create.blade.php ENDPATH**/ ?>