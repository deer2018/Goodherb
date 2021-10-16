<div >
    <label for="title" class="control-label"><?php echo e('วินิจฉัย'); ?></label>
    <input class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($crud->title) ? $crud->title : ''); ?>" >
    <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'อัพเดท' : 'Create'); ?>">
</div>
<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/xx/form.blade.php ENDPATH**/ ?>