

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <?php echo $__env->make('medic.medic_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ประวัติส่วนตัว</div>
                    <div class="card-body">
                    <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="control-label"><?php echo e('ชื่อ'); ?></label>
    <input class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($crud->title) ? $crud->title : ''); ?>" >
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('content') ? 'has-error' : ''); ?>">
    <label for="content" class="control-label"><?php echo e('นามสกุล'); ?></label>
    <input class="form-control" rows="5" name="content" type="text" id="content" value="<?php echo e(isset($crud->content) ? $crud->content : ''); ?>">
    <?php echo $errors->first('content', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('category') ? 'has-error' : ''); ?>">
    <label for="category" class="control-label"><?php echo e('เพศ'); ?></label>
    <select name="category" class="form-control" id="category" >
    <?php $__currentLoopData = json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($crud->category) && $crud->category == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
    <?php echo $errors->first('category', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('user_id') ? 'has-error' : ''); ?>">
    <label for="user_id" class="control-label"><?php echo e('อายุ'); ?></label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="<?php echo e(isset($crud->user_id) ? $crud->user_id : ''); ?>" >
    <?php echo $errors->first('user_id', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="บันทึก">
</div>

                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_history/medic_history.blade.php ENDPATH**/ ?>