

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
                                        <th>แบบสอบถาม</th>
                                        <th>วันที่บันทึก</th>          
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 1</td>
                                        <td><a href="<?php echo e(url('/Q1')); ?>" title="Back"><button  class="btn btn-primary btn-sm"></i>คลิก</button></a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบประเมินการใช้ยาครั้งที่ 1</td>
                                        <td><a href="<?php echo e(url('/Q3')); ?>" title="Back"><button  class="btn btn-primary btn-sm"></i>คลิก</button></a></td>
                                         
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 2</td>
                                        <td><a href="<?php echo e(url('/Q2')); ?>" title="Back"><button  class="btn btn-primary btn-sm"></i>คลิก</button></a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบประเมินการใช้ยาครั้งที่ 2</td>
                                        <td><a href="<?php echo e(url('/Q3-2')); ?>" title="Back"><button  class="btn btn-primary btn-sm"></i>คลิก</button></a></td>
                                         
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        console.log("START");
        disable_btn();
    });

    function disable_btn(){
        fetch("<?php echo e(url('/')); ?>/api/disablebtn")
            .then(response => response.json())
            .then(result => {
                console.log(result);
                
            });
    }

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/volunteer/volunteer_questionnaire/volunteer_questionnaire.blade.php ENDPATH**/ ?>