<div class="form-group <?php echo e($errors->has('medicine') ? 'has-error' : ''); ?>">
    <label for="medicine" class="control-label"><?php echo e('ดอกไม้'); ?></label>
    <select name="medicine" class="form-control" id="medicine" >
    <?php $__currentLoopData = json_decode('{"Agrimony":"Agrimony","Aspen":"Aspen","Beech":"Beech"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($optionKey); ?>" <?php echo e((isset($medicines->medicine) && $medicines->medicine == $optionKey) ? 'selected' : ''); ?>><?php echo e($optionValue); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
    <?php echo $errors->first('medicine', '<p class="help-block">:message</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('quantity') ? 'has-error' : ''); ?>">
    <label for="quantity" class="control-label"><?php echo e('จำนวนหยด'); ?></label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="<?php echo e(isset($medicines->quantity) ? $medicines->quantity : ''); ?>" >
    <?php echo $errors->first('quantity', '<p class="help-block">:message</p>'); ?>

</div>




<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/medic/medic_volunteer/medicine/medicine_form.blade.php ENDPATH**/ ?>