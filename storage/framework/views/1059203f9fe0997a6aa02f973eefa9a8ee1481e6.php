

<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-header py-3"><h6 class="m-1 font-weight-bold text-primary">ประวัติส่วนตัว</h6></div>
<br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-3">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <!-- <li><a href="#"><span class="fab fa-google fa-fw"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li> -->
            </ul>
                <div style="text-align: center" > 
                    <a href="<?php echo e(url('/volunteer_per/' . $data->id . '/edit')); ?>" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
                </div><br>
        </div>
        <div class="col-md-6">
            
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                เลขลำดับอาสาสมัคร                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                                
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                ชื่อ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->username); ?>     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                นามสกุล                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->surname); ?>  
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                                ชื่อที่แสดงบนเว็บไซต์                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->name); ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                อีเมล                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->email); ?> 
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                                อายุ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->age); ?>     
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                เพศ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->sex); ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                เบอร์โทรศัพท์                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->phone); ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                ที่อยู่ (เลขที่บ้าน,หมู่)                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->address); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                จังหวัด                                              
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->province); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                อำเภอ                                             
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->district); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                ตำบล                                             
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->subdistrict); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                รหัสไปรษณีย์                                             
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->zipcode); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                สถานภาพสมรส                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->status); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                อาชีพ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->occupation); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                รายได้ต่อเดือน                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->income); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                ศาสนา                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->religion); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                เชื้อชาติ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->race); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                ระดับการศึกษา                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->education); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                ความเกี่ยวข้องกับผู้ป่วยที่ดูแล                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->relevance); ?>

                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                เข้าร่วมเมื่อ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->created_at); ?> 
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-calendar text-primary"></span>
                                แก้ไขเมื่อ                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                        <?php echo e($data->updated_at); ?> 
                        </td>
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

<?php echo $__env->make('layouts.volunteer.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views//volunteer/volunteer_index.blade.php ENDPATH**/ ?>