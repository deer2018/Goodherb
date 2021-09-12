<table class="table table-bordered">
    <thead>
        <tr>
            <th rowspan="2">อาการหรือความรู้สึกที่เกิดในระยะ 2 - 4 สัปดาห์</th>
            <th style="text-align: center" colspan="4">คะแนน</th>
        </tr>
        <tr>
            <th>0</th>
            <th>1</th>
            <th>2</th>
            <th>3</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>1.มีปัญหาการนอน นอนไม่หลับหรือนอนมาก</td>
            <div class="form-group {{ $errors->has('ep2_1') ? 'has-error' : ''}}">
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="0" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="1" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="2" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_1" type="radio" value="3" required> </label>
                    </div>
                </td>
                {!! $errors->first('ep2_1', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>
        <tr>
            <td>2.มีสมาธิน้อยลง</td>
            <div class="form-group {{ $errors->has('ep2_2') ? 'has-error' : ''}}">
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="0" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="1" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="2" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_2" type="radio" value="3" required> </label>
                    </div>
                </td>
                {!! $errors->first('ep2_2', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>
        <tr>
            <td>3.หงุดหงิด/กระวนกระวาย/ว้าวุ้นใจ</td>
            <div class="form-group {{ $errors->has('ep2_3') ? 'has-error' : ''}}">
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="0" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="1" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="2" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_3" type="radio" value="3" required> </label>
                    </div>
                </td>
                {!! $errors->first('ep2_3', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>
        <tr>
            <td>4.รู้สึกเบื่อ เซ็ง</td>
            <div class="form-group {{ $errors->has('ep2_4') ? 'has-error' : ''}}">
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="0" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="1" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="2" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_4" type="radio" value="3" required> </label>
                    </div>
                </td>
                {!! $errors->first('ep2_4', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>
        <tr>
            <td>5.ไม่อยากพบปะผู้คน</td>
            <div class="form-group {{ $errors->has('ep2_5') ? 'has-error' : ''}}">
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="0" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="1" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="2" required> </label>
                    </div>
                </td>
                <td>
                    <div class="radio">
                        <label><input name="ep2_5" type="radio" value="3" required> </label>
                    </div>
                </td>
                {!! $errors->first('ep2_5', '<p class="help-block">:message</p>') !!}
            </div>
        </tr>
    </tbody>
</table>
