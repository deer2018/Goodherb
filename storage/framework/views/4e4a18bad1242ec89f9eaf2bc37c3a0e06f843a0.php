

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Crud <?php echo e($crud->id); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/crud')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                        <a href="<?php echo e(url('/crud/' . $crud->id . '/edit')); ?>" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="<?php echo e(url('crud' . '/' . $crud->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบข้อมูล</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ลำดับ</th><td><?php echo e($crud->id); ?></td>
                                    </tr>
                                    <tr><th> ชื่อ</th><td> <?php echo e($crud->title); ?> </td></tr>
                                    <tr><th> นามสกุล </th><td> <?php echo e($crud->content); ?> </td></tr>
                                    <tr><th> เพศ </th><td> <?php echo e($crud->category); ?> </td></tr>
                                    <tr><th> อายุ </th><td> <?php echo e($crud->user_id); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/crud/show.blade.php ENDPATH**/ ?>