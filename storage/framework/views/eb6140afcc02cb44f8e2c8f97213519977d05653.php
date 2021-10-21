<div class="table-responsive-sm">
<table class="table table-bordered">
    <thead>
        <tr>
            <th rowspan="2">อาการหรือความรู้สึกที่เกิดในระยะ 2 - 4 สัปดาห์</th>
            <th style="text-align: center" colspan="4">คะแนน</th>
        </tr>
        <tr>
            <th style="text-align: center">แทบไม่มี</th>
            <th style="text-align: center">บางครั้ง</th>
            <th style="text-align: center">บ่อยครั้ง</th>
            <th style="text-align: center">ประจำ</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1.มีปัญหาการนอน นอนไม่หลับหรือนอนมาก</td>
            <div class="form-group <?php echo e($errors->has('ep2_1') ? 'has-error' : ''); ?>">
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="0" required <?php if(isset($Q)): ?> <?php echo e((0 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="1" required <?php if(isset($Q)): ?> <?php echo e((1 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="2" required <?php if(isset($Q)): ?> <?php echo e((2 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="3" required <?php if(isset($Q)): ?> <?php echo e((3 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <?php echo $errors->first('ep2_1', '<p class="help-block">:message</p>'); ?>

            </div>
        </tr>
        <tr>
            <td>2.มีสมาธิน้อยลง</td>
            <div class="form-group <?php echo e($errors->has('ep2_2') ? 'has-error' : ''); ?>">
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="0" required <?php if(isset($Q)): ?> <?php echo e((0 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="1" required <?php if(isset($Q)): ?> <?php echo e((1 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="2" required <?php if(isset($Q)): ?> <?php echo e((2 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="3" required <?php if(isset($Q)): ?> <?php echo e((3 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <?php echo $errors->first('ep2_2', '<p class="help-block">:message</p>'); ?>

            </div>
        </tr>
        <tr>
            <td>3.หงุดหงิด/กระวนกระวาย/ว้าวุ้นใจ</td>
            <div class="form-group <?php echo e($errors->has('ep2_3') ? 'has-error' : ''); ?>">
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="0" required <?php if(isset($Q)): ?> <?php echo e((0 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="1" required <?php if(isset($Q)): ?> <?php echo e((1 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="2" required <?php if(isset($Q)): ?> <?php echo e((2 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="3" required <?php if(isset($Q)): ?> <?php echo e((3 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <?php echo $errors->first('ep2_3', '<p class="help-block">:message</p>'); ?>

            </div>
        </tr>
        <tr>
            <td>4.รู้สึกเบื่อ เซ็ง</td>
            <div class="form-group <?php echo e($errors->has('ep2_4') ? 'has-error' : ''); ?>">
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="0" required <?php if(isset($Q)): ?> <?php echo e((0 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="1" required <?php if(isset($Q)): ?> <?php echo e((1 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="2" required <?php if(isset($Q)): ?> <?php echo e((2 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="3" required <?php if(isset($Q)): ?> <?php echo e((3 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <?php echo $errors->first('ep2_4', '<p class="help-block">:message</p>'); ?>

            </div>
        </tr>
        <tr>
            <td>5.ไม่อยากพบปะผู้คน</td>
            <div class="form-group <?php echo e($errors->has('ep2_5') ? 'has-error' : ''); ?>">
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="0" required <?php if(isset($Q)): ?> <?php echo e((0 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="1" required <?php if(isset($Q)): ?> <?php echo e((1 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="2" required <?php if(isset($Q)): ?> <?php echo e((2 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="3" required <?php if(isset($Q)): ?> <?php echo e((3 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e('checked'); ?> <?php endif; ?>> </label>
                    </div>
                </td>
                <?php echo $errors->first('ep2_5', '<p class="help-block">:message</p>'); ?>

            </div>
        </tr>
    </tbody>
</table>
</div><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/questionnaireone/quest5.blade.php ENDPATH**/ ?>