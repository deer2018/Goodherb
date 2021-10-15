

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
          
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">แบบสอบถาม</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>แบบสอบถาม</th>
                                        <th>วันที่</th>          
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 1</td>
                                        <td>1-11-64</td>
                                        <td><a href="<?php echo e(url('/Q1')); ?>" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 2</td>
                                        <td>8-11-64</td>
                                        <td><a href="<?php echo e(url('/Q2')); ?>" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                     
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>แบบสอบถามประเมิณการใช้ยาครั้งที่ 1</td>
                                        <td>16-11-64</td>
                                        <td><a href="<?php echo e(url('/Q3')); ?>" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                     
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>แบบสอบถามประเมิณการใช้ยาครั้งที่ 2</td>
                                        <td>24-11-64</td>
                                        <td><a href="<?php echo e(url('/Q3-1')); ?>" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                     
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

<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/volunteer_questionnaire.blade.php ENDPATH**/ ?>