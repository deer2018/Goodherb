

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3"><h6 class="m-1 font-weight-bold text-primary">ข้อมูลหมอ</h6></div>
    <div class="card-body">
      

<!-- จำกัดหน้าแสดงข้อมูล -->
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                  
                        <!-- ค้นหา -->
                        <div class="col-sm-12 col-md-11">
                          <form method="GET" action="<?php echo e(url('/admin_volunteer_index')); ?>" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                              <div class="input-group">
                                  <input type="text" class="form-control form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                  <span class="input-group-append">
                                      <button class="btn btn-primary" type="submit">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                              </div>
                          </form>
                        </div>
                  </div></br>

                  <div class="table-responsive-sm">       
                          <table class="table dataTable">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>ชื่อในเว็บ</th>
                                <th>อีเมล</th>
                                <th>สถานะ</th>
                                <th></th>
                              </tr>
                            </thead>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tbody>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td> <?php echo e($item->name); ?></td>
                                <td> <?php echo e($item->email); ?></td>
                                <td> <?php echo e($item->role); ?></td>
                                <td><a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ข้อมูลอสม.ที่รับผิดชอบ</button></a>
                            
                             
                                </td>
                            </tbody>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </table>
                    </div>
            </div>
    </div>
  </div>  
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/admin/admin_medic/admin_medic_index.blade.php ENDPATH**/ ?>