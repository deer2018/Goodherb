

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"> <a href="<?php echo e(url('/predicate1/ . $users->id')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a></div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/medicine/medicine_create')); ?>" class="btn btn-success btn-sm" title="Add New Crud">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มดอกไม้
                        </a>

                   
                            <div class="form-inline my-2 my-lg-0 float-right">ปริมาณทั้งหมด :
                                
                            </div>
                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ดอกไม้</th>
                                        <th>จำนวน/หยด</th>
                                                    
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $medicines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>                                 
                                        <td><?php echo e($item->medicine); ?></td>
                                        <td><?php echo e($item->quantity); ?></td>                                                                               
                                        <td>
                                            <a href="<?php echo e(url('/medicine/' . $item->id . '/medicine_edit')); ?>" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>

                                            <form method="POST" action="<?php echo e(url('/medicine' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $medicines->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/medicine/medicine_index.blade.php ENDPATH**/ ?>