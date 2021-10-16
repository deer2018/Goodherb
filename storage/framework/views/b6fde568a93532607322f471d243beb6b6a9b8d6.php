<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('ชื่อ'); ?></label>
    <div class="form-control"><?php echo e($users->name); ?></div>
</div>

<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="control-label"><?php echo e('อีเมล'); ?></label>
    <div class="form-control"><?php echo e($users->email); ?></div>
</div>

<div class="form-group <?php echo e($errors->has('role') ? 'has-error' : ''); ?>">
    <label for="role" class="control-label"><?php echo e('สถานะ'); ?></label>
    <select name="role" class="form-control" id="role" >
    <?php $__currentLoopData = json_decode('{"หมอ":"หมอ","อาสาสมัคร":"อาสาสมัคร"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($users->role) && $users->role == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
    <?php echo $errors->first('role', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'อัพเดท' : 'Create'); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/admin/admin_user/form.blade.php ENDPATH**/ ?>