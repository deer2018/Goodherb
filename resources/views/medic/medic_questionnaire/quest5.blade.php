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
                    <div class="form-group {{ $errors->has('ep2_1') ? 'has-error' : ''}}">

                        <div class="radio">
                            <label><input disabled name="ep2_1" type="radio" value="0" required @if (isset($_qt_2->ep2_1)) {{ (0 == $_qt_2->ep2_1) ? 'checked' : '' }} @else {{ '' }} @endif> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_1" type="radio" value="1" required @if (isset($_qt_2->ep2_1)) {{ (1 == $_qt_2->ep2_1) ? 'checked' : '' }} @else {{ '' }} @endif> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_1" type="radio" value="2" required @if (isset($_qt_2->ep2_1)) {{ (2 == $_qt_2->ep2_1) ? 'checked' : '' }} @else {{ '' }} @endif> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_1" type="radio" value="3" required @if (isset($_qt_2->ep2_1)) {{ (3 == $_qt_2->ep2_1) ? 'checked' : '' }} @else {{ '' }} @endif> ประจำ </label>
                        </div>

                        {!! $errors->first('ep2_1', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">2.มีสมาธิน้อยลง</div>
                    <br>
                    <div class="form-group {{ $errors->has('ep2_2') ? 'has-error' : ''}}">

                        <div class="radio">
                            <label><input disabled name="ep2_2" type="radio" value="0" required @if (isset($_qt_2->ep2_2)) {{ (0 == $_qt_2->ep2_2) ? 'checked' : '' }} @else {{ '' }} @endif> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_2" type="radio" value="1" required @if (isset($_qt_2->ep2_2)) {{ (1 == $_qt_2->ep2_2) ? 'checked' : '' }} @else {{ '' }} @endif> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_2" type="radio" value="2" required @if (isset($_qt_2->ep2_2)) {{ (2 == $_qt_2->ep2_2) ? 'checked' : '' }} @else {{ '' }} @endif> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_2" type="radio" value="3" required @if (isset($_qt_2->ep2_2)) {{ (3 == $_qt_2->ep2_2) ? 'checked' : '' }} @else {{ '' }} @endif> ประจำ </label>
                        </div>

                        {!! $errors->first('ep2_2', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">3.หงุดหงิด/กระวนกระวาย/ว้าวุ้นใจ</div>
                    <br>
                    <div class="form-group {{ $errors->has('ep2_3') ? 'has-error' : ''}}">

                        <div class="radio">
                            <label><input disabled name="ep2_3" type="radio" value="0" required @if (isset($_qt_2->ep2_3)) {{ (0 == $_qt_2->ep2_3) ? 'checked' : '' }} @else {{ '' }} @endif> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_3" type="radio" value="1" required @if (isset($_qt_2->ep2_3)) {{ (1 == $_qt_2->ep2_3) ? 'checked' : '' }} @else {{ '' }} @endif> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_3" type="radio" value="2" required @if (isset($_qt_2->ep2_3)) {{ (2 == $_qt_2->ep2_3) ? 'checked' : '' }} @else {{ '' }} @endif> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_3" type="radio" value="3" required @if (isset($_qt_2->ep2_3)) {{ (3 == $_qt_2->ep2_3) ? 'checked' : '' }} @else {{ '' }} @endif> ประจำ </label>
                        </div>

                        {!! $errors->first('ep2_3', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">4.รู้สึกเบื่อ เซ็ง</div>
                    <br>
                    <div class="form-group {{ $errors->has('ep2_4') ? 'has-error' : ''}}">

                        <div class="radio">
                            <label><input disabled name="ep2_4" type="radio" value="0" required @if (isset($_qt_2->ep2_4)) {{ (0 == $_qt_2->ep2_4) ? 'checked' : '' }} @else {{ '' }} @endif> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_4" type="radio" value="1" required @if (isset($_qt_2->ep2_4)) {{ (1 == $_qt_2->ep2_4) ? 'checked' : '' }} @else {{ '' }} @endif> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_4" type="radio" value="2" required @if (isset($_qt_2->ep2_4)) {{ (2 == $_qt_2->ep2_4) ? 'checked' : '' }} @else {{ '' }} @endif> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_4" type="radio" value="3" required @if (isset($_qt_2->ep2_4)) {{ (3 == $_qt_2->ep2_4) ? 'checked' : '' }} @else {{ '' }} @endif> ประจำ </label>
                        </div>

                        {!! $errors->first('ep2_4', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-2 border bg-light">5.ไม่อยากพบปะผู้คน</div>
                    <br>
                    <div class="form-group {{ $errors->has('ep2_5') ? 'has-error' : ''}}">

                        <div class="radio">
                            <label><input disabled name="ep2_5" type="radio" value="0" required @if (isset($_qt_2->ep2_5)) {{ (0 == $_qt_2->ep2_5) ? 'checked' : '' }} @else {{ '' }} @endif> แทบไม่มี </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_5" type="radio" value="1" required @if (isset($_qt_2->ep2_5)) {{ (1 == $_qt_2->ep2_5) ? 'checked' : '' }} @else {{ '' }} @endif> บางครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_5" type="radio" value="2" required @if (isset($_qt_2->ep2_5)) {{ (2 == $_qt_2->ep2_5) ? 'checked' : '' }} @else {{ '' }} @endif> บ่อยครั้ง </label>
                        </div>


                        <div class="radio">
                            <label><input disabled name="ep2_5" type="radio" value="3" required @if (isset($_qt_2->ep2_5)) {{ (3 == $_qt_2->ep2_5) ? 'checked' : '' }} @else {{ '' }} @endif> ประจำ </label>
                        </div>

                        {!! $errors->first('ep2_5', '<p class="help-block">:message</p>') !!}
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>