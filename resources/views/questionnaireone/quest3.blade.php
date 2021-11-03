<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">&nbsp;&nbsp;&nbsp;&nbsp;คำถามต่อไปนี้เป็นคำถามภายหลังการได้รับการวินิจฉัยและให้การบำบัดจากแพทย์/ผู้เชี่ยวชาญ เป็นระยะเวลา 14 วันในการรับประทานน้ำดอกไม้บาค</div>
    </div>
  </div>
<br>
        <!--////////////////////////////// -->

            <div class="form-group {{ $errors->has('ep4_1') ? 'has-error' : ''}}">
                    <div class="radio">
                    <input name="ep4_1" type="radio" value="0" @if (isset($Q->ep4_1)) {{ (0 == $Q->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> 1.ท่านทานตลอดระยะเวลา 14 วัน
            </div>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
            </div>
<hr>
        <!--////////////////////////////// -->

        &nbsp;&nbsp;&nbsp; 2.ท่านลืมรับประทานเป็นบางครั้งตลอดระยะเวลา 14 วัน
            <div class="radio">
<br>                <input name="ep4_1" type="radio" value="1" @if (isset($Q->ep4_1)) {{ (1 == $Q->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> 2-1.ลืม 1 ครั้ง
            </div>
                <div class="radio">
                    <input name="ep4_1" type="radio" value="1" @if (isset($Q->ep4_1)) {{ (1 == $Q->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> 2-2.ลืม 2 ครั้ง
            </div>
                <div class="radio">
                    <input name="ep4_1" type="radio" value="1" @if (isset($Q->ep4_1)) {{ (1 == $Q->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> 2-3.ลืมมากกว่า 2 ครั้ง
            </div>
            </td>
<hr>
        <!--////////////////////////////// -->

            <div class="radio">
                    <input name="ep4_1" type="radio" value="2" @if (isset($Q->ep4_1)) {{ (2 == $Q->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> 3.ท่านไม่ได้ประทานเลยตลอดระยะเวลา 14 วัน
            </div>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
            </div>
<hr>

