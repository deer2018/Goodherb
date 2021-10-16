

<?php $__env->startSection('content'); ?>
<div class="card">
<div class="card-header">ประวัติส่วนตัว</div>
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
            <a href="#" title="Back"><button class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>แก้ไขรูป</button></a>
            </div>
        </div>
        <div class="col-md-7">
            
            <div class="table-responsive">
            <form method="POST" action="<?php echo e(url('/medic_personal/' . $User->id)); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo e(csrf_field()); ?>


                           
                    <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                        
                        <label for="username" class="control-label"><?php echo e('ชื่อ'); ?></label>
                        <input class="form-control" name="username" type="text" id="username" value="<?php echo e(isset($User->username) ? $User->username : ''); ?>" >
                        <?php echo $errors->first('username', '<p class="help-block">:message</p>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('surname') ? 'has-error' : ''); ?>">
                        <label for="surname" class="control-label"><?php echo e('นามสกุล'); ?></label>
                        <input class="form-control" rows="5" name="surname" type="text" id="surname" value="<?php echo e(isset($User->surname) ? $User->surname : ''); ?>">
                        <?php echo $errors->first('surname', '<p class="help-block">:message</p>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('sex') ? 'has-error' : ''); ?>">
                        <label for="sex" class="control-label"><?php echo e('เพศ'); ?></label>
                        <select name="sex" class="form-control" id="sex" >
                        <?php $__currentLoopData = json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($User->sex) && $User->sex == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                        <?php echo $errors->first('sex', '<p class="help-block">:message</p>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('age') ? 'has-error' : ''); ?>">
                        <label for="age" class="control-label"><?php echo e('อายุ'); ?></label>
                        <input class="form-control" name="age" type="number" id="age" value="<?php echo e(isset($User->age) ? $User->age : ''); ?>" >
                        <?php echo $errors->first('age', '<p class="help-block">:message</p>'); ?>

                    </div>

                    <div class="form-group <?php echo e($errors->has('phone') ? 'has-error' : ''); ?>">
                        <label for="phone" class="control-label"><?php echo e('เบอร์โทรศัพท์'); ?></label>
                        <input class="form-control" name="phone" type="text" id="phone" value="<?php echo e(isset($User->phone) ? $User->phone : ''); ?>" >
                        <?php echo $errors->first('phone', '<p class="help-block">:message</p>'); ?>

                    </div>

                <div class="container-fluid">
                    <div class="row">                  
                            <div class="col-md-10">
                                <a href="<?php echo e(url('/medic_personal')); ?>" title="Back"><button class="btn btn-info" ><i  aria-hidden="true"></i>ย้อนกลับ</button></a>
                            </div>

                            <div class="col-md-2">
                                <input class="btn btn-primary" type="submit" value="บันทึก">
                            </div>
                    </div> 
                </div>       
                    <br> 
                    </form> 
            </div>
        </div>
    </div>
</div>
</div>                         
</div>  
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.medic.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_personal/medic_edit.blade.php ENDPATH**/ ?>