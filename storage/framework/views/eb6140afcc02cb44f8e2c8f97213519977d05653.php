<div class="table-responsive-sm">
    <table class="table table-bordered">
        <thead>
            <tr>
                <!-- <th rowspan="2">อาการหรือความรู้สึกที่เกิดในระยะ 2 - 4 สัปดาห์</th> -->
                <!-- <th style="text-align: center" colspan="4">คะแนน</th> -->
            </tr>
            <!-- <tr>
            <th style="text-align: center">แทบไม่มี</th>
            <th style="text-align: center">บางครั้ง</th>
            <th style="text-align: center">บ่อยครั้ง</th>
            <th style="text-align: center">ประจำ</th>
        </tr> -->
        </thead>

        <tbody>
            <tr>
                <td>
                    <div class="p-2 border bg-light">1.มีปัญหาการนอน นอนไม่หลับหรือนอนมาก</div>
                    <br>
                    <div class="form-group <?php echo e($errors->has('ep2_1') ? 'has-error' : ''); ?>">

                        <div class="radio">
                            <label><input name="ep2_1" type="radio" value="0" required <?php if(isset($Q->ep2_1)): ?> <?php echo e((0 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_1" type="radio" value="1" required <?php if(isset($Q->ep2_1)): ?> <?php echo e((1 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_1" type="radio" value="2" required <?php if(isset($Q->ep2_1)): ?> <?php echo e((2 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_1" type="radio" value="3" required <?php if(isset($Q->ep2_1)): ?> <?php echo e((3 == $Q->ep2_1) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> ประจำ </label>
                        </div>

                        <?php echo $errors->first('ep2_1', '<p class="help-block">:message</p>'); ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">2.มีสมาธิน้อยลง</div>
                    <br>
                    <div class="form-group <?php echo e($errors->has('ep2_2') ? 'has-error' : ''); ?>">

                        <div class="radio">
                            <label><input name="ep2_2" type="radio" value="0" required <?php if(isset($Q->ep2_2)): ?> <?php echo e((0 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_2" type="radio" value="1" required <?php if(isset($Q->ep2_2)): ?> <?php echo e((1 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_2" type="radio" value="2" required <?php if(isset($Q->ep2_2)): ?> <?php echo e((2 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_2" type="radio" value="3" required <?php if(isset($Q->ep2_2)): ?> <?php echo e((3 == $Q->ep2_2) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> ประจำ </label>
                        </div>

                        <?php echo $errors->first('ep2_2', '<p class="help-block">:message</p>'); ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">3.หงุดหงิด/กระวนกระวาย/ว้าวุ้นใจ</div>
                    <br>
                    <div class="form-group <?php echo e($errors->has('ep2_3') ? 'has-error' : ''); ?>">

                        <div class="radio">
                            <label><input name="ep2_3" type="radio" value="0" required <?php if(isset($Q->ep2_3)): ?> <?php echo e((0 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_3" type="radio" value="1" required <?php if(isset($Q->ep2_3)): ?> <?php echo e((1 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_3" type="radio" value="2" required <?php if(isset($Q->ep2_3)): ?> <?php echo e((2 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_3" type="radio" value="3" required <?php if(isset($Q->ep2_3)): ?> <?php echo e((3 == $Q->ep2_3) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> ประจำ </label>
                        </div>

                        <?php echo $errors->first('ep2_3', '<p class="help-block">:message</p>'); ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">4.รู้สึกเบื่อ เซ็ง</div>
                    <br>
                    <div class="form-group <?php echo e($errors->has('ep2_4') ? 'has-error' : ''); ?>">

                        <div class="radio">
                            <label><input name="ep2_4" type="radio" value="0" required <?php if(isset($Q->ep2_4)): ?> <?php echo e((0 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_4" type="radio" value="1" required <?php if(isset($Q->ep2_4)): ?> <?php echo e((1 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_4" type="radio" value="2" required <?php if(isset($Q->ep2_4)): ?> <?php echo e((2 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_4" type="radio" value="3" required <?php if(isset($Q->ep2_4)): ?> <?php echo e((3 == $Q->ep2_4) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> ประจำ </label>
                        </div>

                        <?php echo $errors->first('ep2_4', '<p class="help-block">:message</p>'); ?>

                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">5.ไม่อยากพบปะผู้คน</div>
                    <br>
                    <div class="form-group <?php echo e($errors->has('ep2_5') ? 'has-error' : ''); ?>">

                        <div class="radio">
                            <label><input name="ep2_5" type="radio" value="0" required <?php if(isset($Q->ep2_5)): ?> <?php echo e((0 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_5" type="radio" value="1" required <?php if(isset($Q->ep2_5)): ?> <?php echo e((1 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_5" type="radio" value="2" required <?php if(isset($Q->ep2_5)): ?> <?php echo e((2 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input name="ep2_5" type="radio" value="3" required <?php if(isset($Q->ep2_5)): ?> <?php echo e((3 == $Q->ep2_5) ? 'checked' : ''); ?> <?php else: ?> <?php echo e(''); ?> <?php endif; ?>> ประจำ </label>
                        </div>

                        <?php echo $errors->first('ep2_5', '<p class="help-block">:message</p>'); ?>

                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div><?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/questionnaireone/quest5.blade.php ENDPATH**/ ?>