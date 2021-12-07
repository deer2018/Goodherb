<div class="form-group <?php echo e($errors->has('medicine') ? 'has-error' : ''); ?>">
    <label for="medicine" class="control-label"><?php echo e('ดอกไม้'); ?></label>
    <select name="medicine" class="form-control" id="medicine" >
    <?php $__currentLoopData = json_decode('{"Agrimony":"Agrimony","Aspen":"Aspen","Beech":"Beech","Centaury":"Centaury","Cerato":"Cerato","Cherry Plum":"Cherry Plum","Chestnut Bud":"Chestnut Bud","Chicory":"Chicory","Clematis":"Clematis","Crab Apple":"Crab Apple","Elm":"Elm","Gentian":"Gentian","Gorse":"Gorse","Heather":"Heather","Holly":"Holly","Honeysuckle":"Honeysuckle","Hornbeam":"Hornbeam","Impatiens":"Impatiens","Larch":"Larch","Mimulus":"Mimulus","Mustard":"Mustard","Oak":"Oak","Olive":"Olive","Pine":"Pine","Red Chestnut":"Red Chestnut","Rock Rose":"Rock Rose","Rock Water":"Rock Water","Scleranthus":"Scleranthus","Star of Bethlehem":"Star of Bethlehem","Sweet Chestnut":"Sweet Chestnut","Vervain":"Vervain","Vine":"Vine","Walnut":"Walnut","Water Violet":"Water Violet","White Chestnut":"White Chestnut","Wild Oat":"Wild Oat","Wild Rose":"Wild Rose","Willow":"Willow"}', true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $optionValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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