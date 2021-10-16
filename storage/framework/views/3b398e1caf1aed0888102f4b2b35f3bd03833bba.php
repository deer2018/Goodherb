

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Crud</div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/crud/create')); ?>" class="btn btn-success btn-sm" title="Add New Crud">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                        </a>

                        <form method="GET" action="<?php echo e(url('/crud')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>เพศ</th>
                                        <th>อายุ</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $crud; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->title); ?></td>
                                        <td><?php echo e($item->content); ?></td>
                                        <td><?php echo e($item->category); ?></td>
                                        <td><?php echo e($item->user_id); ?></td>
                                        <th> ยังไม่ได้ตรวจ </th>
                                        <td>
                                            <a href="<?php echo e(url('/crud/' . $item->id)); ?>" title="View Crud"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>รายละเอียด</button></a>
                                            <a href="<?php echo e(url('/crud/' . $item->id . '/edit')); ?>" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>

                                            <form method="POST" action="<?php echo e(url('/crud' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
                                            </form>
                                            <a href="<?php echo e(url('/xx')); ?>" ><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ตรวจสอบ</button></a>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $crud->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/crud/index.blade.php ENDPATH**/ ?>