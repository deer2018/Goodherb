*คำถามทั้งหมดอยู่ในช่วง 2 สัปดาห์ที่ผ่านมา

<div class="container px-0">
    <div class="row gx-5">
        <div class="col"><br>
            <div class="p-2 border bg-light">1.ท่านพอใจกับสุขภาพของท่านในตอนนี้เพียงใด</div>
        </div>
    </div>
<br>
    <div class="form-group {{ $errors->has('ep3_1') ? 'has-error' : ''}}">
        <div class="radio">
            <input name="ep3_1" type="radio" value="5" required @if (isset($Q->ep3_1)) {{ (5 == $Q->ep3_1) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
        </div>
        <div class="radio">
            <input name="ep3_1" type="radio" value="4" required @if (isset($Q->ep3_1)) {{ (4 == $Q->ep3_1) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
        </div>
        <div class="radio">
            <input name="ep3_1" type="radio" value="3" required @if (isset($Q->ep3_1)) {{ (3 == $Q->ep3_1) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
        </div>
        <div class="radio">
            <input name="ep3_1" type="radio" value="2" required @if (isset($Q->ep3_1)) {{ (2 == $Q->ep3_1) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
        </div>
        <div class="radio">
            <input name="ep3_1" type="radio" value="1" required @if (isset($Q->ep3_1)) {{ (1 == $Q->ep3_1) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
        </div>
            {!! $errors->first('ep3_1', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">2.การเจ็บปวดตามร่างกาย เช่น ปวดหัว ปวดท้อง ปวดตามตัว ทำให้ท่านไม่สามารถทำในสิ่งที่ต้องการมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_2') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_2" type="radio" value="5" required @if (isset($Q->ep3_2)) {{ (5 == $Q->ep3_2) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_2" type="radio" value="4" required @if (isset($Q->ep3_2)) {{ (4 == $Q->ep3_2) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_2" type="radio" value="3" required @if (isset($Q->ep3_2)) {{ (3 == $Q->ep3_2) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_2" type="radio" value="2" required @if (isset($Q->ep3_2)) {{ (2 == $Q->ep3_2) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_2" type="radio" value="1" required @if (isset($Q->ep3_2)) {{ (1 == $Q->ep3_2) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_2', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">3.ท่านมีกำลังเพียงพอที่จะทำสิ่งต่าง ๆ ในแต่ละวันไหม (ทั้งเรื่องงาน หรือการดำเนินชีวิตประจำวัน)</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_3') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_3" type="radio" value="5" required @if (isset($Q->ep3_3)) {{ (5 == $Q->ep3_3) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_3" type="radio" value="4" required @if (isset($Q->ep3_3)) {{ (4 == $Q->ep3_3) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_3" type="radio" value="3" required @if (isset($Q->ep3_3)) {{ (3 == $Q->ep3_3) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_3" type="radio" value="2" required @if (isset($Q->ep3_3)) {{ (2 == $Q->ep3_3) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_3" type="radio" value="1" required @if (isset($Q->ep3_3)) {{ (1 == $Q->ep3_3) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_3', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">4.ท่านพอใจกับการนอนหลับของท่านมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_4') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_4" type="radio" value="5" required @if (isset($Q->ep3_4)) {{ (5 == $Q->ep3_4) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_4" type="radio" value="4" required @if (isset($Q->ep3_4)) {{ (4 == $Q->ep3_4) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_4" type="radio" value="3" required @if (isset($Q->ep3_4)) {{ (3 == $Q->ep3_4) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_4" type="radio" value="2" required @if (isset($Q->ep3_4)) {{ (2 == $Q->ep3_4) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_4" type="radio" value="1" required @if (isset($Q->ep3_4)) {{ (1 == $Q->ep3_4) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_4', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">5.ท่านรู้สึกพึงพอใจในชีวิต (เช่น มีความสุข ความสงบ มีความหวัง) มากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_5') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_5" type="radio" value="5" required @if (isset($Q->ep3_5)) {{ (5 == $Q->ep3_5) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_5" type="radio" value="4" required @if (isset($Q->ep3_5)) {{ (4 == $Q->ep3_5) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_5" type="radio" value="3" required @if (isset($Q->ep3_5)) {{ (3 == $Q->ep3_5) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_5" type="radio" value="2" required @if (isset($Q->ep3_5)) {{ (2 == $Q->ep3_5) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_5" type="radio" value="1" required @if (isset($Q->ep3_5)) {{ (1 == $Q->ep3_5) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_5', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">6.ท่านมีสมาธิในการทำงานต่าง ๆ ดีเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_6') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_6" type="radio" value="5" required @if (isset($Q->ep3_6)) {{ (5 == $Q->ep3_6) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_6" type="radio" value="4" required @if (isset($Q->ep3_6)) {{ (4 == $Q->ep3_6) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_6" type="radio" value="3" required @if (isset($Q->ep3_6)) {{ (3 == $Q->ep3_6) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_6" type="radio" value="2" required @if (isset($Q->ep3_6)) {{ (2 == $Q->ep3_6) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_6" type="radio" value="1" required @if (isset($Q->ep3_6)) {{ (1 == $Q->ep3_6) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_6', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">7.ท่านรู้สึกพอใจในตนเองมากน้อยแค่ไหน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_7') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_7" type="radio" value="5" required @if (isset($Q->ep3_7)) {{ (5 == $Q->ep3_7) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_7" type="radio" value="4" required @if (isset($Q->ep3_7)) {{ (4 == $Q->ep3_7) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_7" type="radio" value="3" required @if (isset($Q->ep3_7)) {{ (3 == $Q->ep3_7) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_7" type="radio" value="2" required @if (isset($Q->ep3_7)) {{ (2 == $Q->ep3_7) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_7" type="radio" value="1" required @if (isset($Q->ep3_7)) {{ (1 == $Q->ep3_7) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_7', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">8.ท่านยอมรับรูปร่างหน้าตาของตัวเองได้ไหม</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_8') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_8" type="radio" value="5" required @if (isset($Q->ep3_8)) {{ (5 == $Q->ep3_8) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_8" type="radio" value="4" required @if (isset($Q->ep3_8)) {{ (4 == $Q->ep3_8) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_8" type="radio" value="3" required @if (isset($Q->ep3_8)) {{ (3 == $Q->ep3_8) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_8" type="radio" value="2" required @if (isset($Q->ep3_8)) {{ (2 == $Q->ep3_8) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_8" type="radio" value="1" required @if (isset($Q->ep3_8)) {{ (1 == $Q->ep3_8) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_8', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">9.ท่านมีความรู้สึกไม่ดี เช่น รู้สึกเหงา เศร้า หดหู่ สิ้นหวังวิตกกังวล บ่อยแค่ไหน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_9') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_9" type="radio" value="5" required @if (isset($Q->ep3_9)) {{ (5 == $Q->ep3_9) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_9" type="radio" value="4" required @if (isset($Q->ep3_9)) {{ (4 == $Q->ep3_9) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_9" type="radio" value="3" required @if (isset($Q->ep3_9)) {{ (3 == $Q->ep3_9) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_9" type="radio" value="2" required @if (isset($Q->ep3_9)) {{ (2 == $Q->ep3_9) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_9" type="radio" value="1" required @if (isset($Q->ep3_9)) {{ (1 == $Q->ep3_9) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_9', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">10.ท่านรู้สึกพอใจมากน้อยแค่ไหนที่สามารถทำอะไร ๆผ่านไปได้ในแต่ละวัน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_10') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_10" type="radio" value="5" required @if (isset($Q->ep3_10)) {{ (5 == $Q->ep3_10) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_10" type="radio" value="4" required @if (isset($Q->ep3_10)) {{ (4 == $Q->ep3_10) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_10" type="radio" value="3" required @if (isset($Q->ep3_10)) {{ (3 == $Q->ep3_10) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_10" type="radio" value="2" required @if (isset($Q->ep3_10)) {{ (2 == $Q->ep3_10) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_10" type="radio" value="1" required @if (isset($Q->ep3_10)) {{ (1 == $Q->ep3_10) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_10', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">11.ท่านจำเป็นต้องไปรับการรักษาพยาบาลมากน้อยเพียงใดเพื่อที่จะทำงานหรือมีชีวิตอยู่ไปได้ในแต่ละวัน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_11') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_11" type="radio" value="5" required @if (isset($Q->ep3_11)) {{ (5 == $Q->ep3_11) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_11" type="radio" value="4" required @if (isset($Q->ep3_11)) {{ (4 == $Q->ep3_11) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_11" type="radio" value="3" required @if (isset($Q->ep3_11)) {{ (3 == $Q->ep3_11) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_11" type="radio" value="2" required @if (isset($Q->ep3_11)) {{ (2 == $Q->ep3_11) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_11" type="radio" value="1" required @if (isset($Q->ep3_11)) {{ (1 == $Q->ep3_11) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_11', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">12.ท่านพอใจกับความสามารถในการทำงานได้อย่างที่เคยทำมามากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_12') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_12" type="radio" value="5" required @if (isset($Q->ep3_12)) {{ (5 == $Q->ep3_12) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_12" type="radio" value="4" required @if (isset($Q->ep3_12)) {{ (4 == $Q->ep3_12) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_12" type="radio" value="3" required @if (isset($Q->ep3_12)) {{ (3 == $Q->ep3_12) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_12" type="radio" value="2" required @if (isset($Q->ep3_12)) {{ (2 == $Q->ep3_12) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_12" type="radio" value="1" required @if (isset($Q->ep3_12)) {{ (1 == $Q->ep3_12) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_12', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">13.ท่านพอใจต่อการผูกมิตรหรือเข้ากับคนอื่น อย่างที่ผ่านมาแค่ไหน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_13') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_13" type="radio" value="5" required @if (isset($Q->ep3_13)) {{ (5 == $Q->ep3_13) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_13" type="radio" value="4" required @if (isset($Q->ep3_13)) {{ (4 == $Q->ep3_13) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_13" type="radio" value="3" required @if (isset($Q->ep3_13)) {{ (3 == $Q->ep3_13) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_13" type="radio" value="2" required @if (isset($Q->ep3_13)) {{ (2 == $Q->ep3_13) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_13" type="radio" value="1" required @if (isset($Q->ep3_13)) {{ (1 == $Q->ep3_13) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_13', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">14.ท่านพอใจกับการช่วยเหลือที่เคยได้รับจากเพื่อน ๆ แค่ไหน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_14') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_14" type="radio" value="5" required @if (isset($Q->ep3_14)) {{ (5 == $Q->ep3_14) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_14" type="radio" value="4" required @if (isset($Q->ep3_14)) {{ (4 == $Q->ep3_14) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_14" type="radio" value="3" required @if (isset($Q->ep3_14)) {{ (3 == $Q->ep3_14) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_14" type="radio" value="2" required @if (isset($Q->ep3_14)) {{ (2 == $Q->ep3_14) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_14" type="radio" value="1" required @if (isset($Q->ep3_14)) {{ (1 == $Q->ep3_14) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_14', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">15.ท่านรู้สึกว่าชีวิตมีความมั่นคงปลอดภัยดีไหมในแต่ละวัน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_15') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_15" type="radio" value="5" required @if (isset($Q->ep3_15)) {{ (5 == $Q->ep3_15) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_15" type="radio" value="4" required @if (isset($Q->ep3_15)) {{ (4 == $Q->ep3_15) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_15" type="radio" value="3" required @if (isset($Q->ep3_15)) {{ (3 == $Q->ep3_15) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_15" type="radio" value="2" required @if (isset($Q->ep3_15)) {{ (2 == $Q->ep3_15) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_15" type="radio" value="1" required @if (isset($Q->ep3_15)) {{ (1 == $Q->ep3_15) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_15', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">16.ท่านพอใจกับสภาพบ้านเรือนที่อยู่ตอนนี้มากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_16') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_16" type="radio" value="5" required @if (isset($Q->ep3_16)) {{ (5 == $Q->ep3_16) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_16" type="radio" value="4" required @if (isset($Q->ep3_16)) {{ (4 == $Q->ep3_16) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_16" type="radio" value="3" required @if (isset($Q->ep3_16)) {{ (3 == $Q->ep3_16) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_16" type="radio" value="2" required @if (isset($Q->ep3_16)) {{ (2 == $Q->ep3_16) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_16" type="radio" value="1" required @if (isset($Q->ep3_16)) {{ (1 == $Q->ep3_16) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_16', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">17.ท่านมีเงินพอใช้จ่ายตามความจำเป็นมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_17') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_17" type="radio" value="5" required @if (isset($Q->ep3_17)) {{ (5 == $Q->ep3_17) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_17" type="radio" value="4" required @if (isset($Q->ep3_17)) {{ (4 == $Q->ep3_17) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_17" type="radio" value="3" required @if (isset($Q->ep3_17)) {{ (3 == $Q->ep3_17) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_17" type="radio" value="2" required @if (isset($Q->ep3_17)) {{ (2 == $Q->ep3_17) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_17" type="radio" value="1" required @if (isset($Q->ep3_17)) {{ (1 == $Q->ep3_17) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_17', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">18.ท่านพอใจที่จะสามารถไปใช้บริการสาธารณสุขได้ตามความจำเป็นเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_18') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_18" type="radio" value="5" required @if (isset($Q->ep3_18)) {{ (5 == $Q->ep3_18) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_18" type="radio" value="4" required @if (isset($Q->ep3_18)) {{ (4 == $Q->ep3_18) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_18" type="radio" value="3" required @if (isset($Q->ep3_18)) {{ (3 == $Q->ep3_18) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_18" type="radio" value="2" required @if (isset($Q->ep3_18)) {{ (2 == $Q->ep3_18) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_18" type="radio" value="1" required @if (isset($Q->ep3_18)) {{ (1 == $Q->ep3_18) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_18', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">19.ท่านได้รู้เรื่องราวข่าวสารที่จำเป็นในชีวิตแต่ละวันมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_19') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_19" type="radio" value="5" required @if (isset($Q->ep3_19)) {{ (5 == $Q->ep3_19) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_19" type="radio" value="4" required @if (isset($Q->ep3_19)) {{ (4 == $Q->ep3_19) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_19" type="radio" value="3" required @if (isset($Q->ep3_19)) {{ (3 == $Q->ep3_19) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_19" type="radio" value="2" required @if (isset($Q->ep3_19)) {{ (2 == $Q->ep3_19) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_19" type="radio" value="1" required @if (isset($Q->ep3_19)) {{ (1 == $Q->ep3_19) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_19', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">20.ท่านมีโอกาสได้พักผ่อนคลายเครียดมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_20') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_20" type="radio" value="5" required @if (isset($Q->ep3_20)) {{ (5 == $Q->ep3_20) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_20" type="radio" value="4" required @if (isset($Q->ep3_20)) {{ (4 == $Q->ep3_20) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_20" type="radio" value="3" required @if (isset($Q->ep3_20)) {{ (3 == $Q->ep3_20) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_20" type="radio" value="2" required @if (isset($Q->ep3_20)) {{ (2 == $Q->ep3_20) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_20" type="radio" value="1" required @if (isset($Q->ep3_20)) {{ (1 == $Q->ep3_20) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_20', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">21.สภาพแวดล้อมดีต่อสุขภาพของท่านมากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_21') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_21" type="radio" value="5" required @if (isset($Q->ep3_21)) {{ (5 == $Q->ep3_21) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_21" type="radio" value="4" required @if (isset($Q->ep3_21)) {{ (4 == $Q->ep3_21) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_21" type="radio" value="3" required @if (isset($Q->ep3_21)) {{ (3 == $Q->ep3_21) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_21" type="radio" value="2" required @if (isset($Q->ep3_21)) {{ (2 == $Q->ep3_21) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_21" type="radio" value="1" required @if (isset($Q->ep3_21)) {{ (1 == $Q->ep3_21) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_21', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">22.ท่านพอใจกับการเดินทางไปไหนมาไหนของท่าน (หมายถึงการคมนาคม) มากน้อยเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_22') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_22" type="radio" value="5" required @if (isset($Q->ep3_22)) {{ (5 == $Q->ep3_22) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_22" type="radio" value="4" required @if (isset($Q->ep3_22)) {{ (5 == $Q->ep3_22) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_22" type="radio" value="3" required @if (isset($Q->ep3_22)) {{ (5 == $Q->ep3_22) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_22" type="radio" value="2" required @if (isset($Q->ep3_22)) {{ (5 == $Q->ep3_22) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_22" type="radio" value="1" required @if (isset($Q->ep3_22)) {{ (5 == $Q->ep3_22) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_22', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">23.ท่านรู้สึกว่าชีวิตท่านมีความหมายมากน้อยแค่ไหน</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_23') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_23" type="radio" value="5" required @if (isset($Q->ep3_23)) {{ (5 == $Q->ep3_23) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_23" type="radio" value="4" required @if (isset($Q->ep3_23)) {{ (4 == $Q->ep3_23) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_23" type="radio" value="3" required @if (isset($Q->ep3_23)) {{ (3 == $Q->ep3_23) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_23" type="radio" value="2" required @if (isset($Q->ep3_23)) {{ (2 == $Q->ep3_23) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_23" type="radio" value="1" required @if (isset($Q->ep3_23)) {{ (1 == $Q->ep3_23) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_23', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">24.ท่านสามารถไปไหนมาไหนด้วยตนเองได้ดีเพียงใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_24') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_24" type="radio" value="5" required @if (isset($Q->ep3_24)) {{ (5 == $Q->ep3_24) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_24" type="radio" value="4" required @if (isset($Q->ep3_24)) {{ (4 == $Q->ep3_24) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_24" type="radio" value="3" required @if (isset($Q->ep3_24)) {{ (3 == $Q->ep3_24) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_24" type="radio" value="2" required @if (isset($Q->ep3_24)) {{ (2 == $Q->ep3_24) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_24" type="radio" value="1" required @if (isset($Q->ep3_24)) {{ (1 == $Q->ep3_24) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_24', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">25.ท่านพอใจในชีวิตทางเพศของท่านแค่ไหน ? (ชีวิตทางเพศ หมายถึง เมื่อเกิดความรู้สึกทางเพศขึ้นแล้วท่านมีวิธีจัดการทำให้ผ่อนคลายลงได้ รวมถึง การช่วยตัวเองหรือการมีเพศสัมพันธ์)</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_25') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_25" type="radio" value="5" required @if (isset($Q->ep3_25)) {{ (5 == $Q->ep3_25) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_25" type="radio" value="4" required @if (isset($Q->ep3_25)) {{ (4 == $Q->ep3_25) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_25" type="radio" value="3" required @if (isset($Q->ep3_25)) {{ (3 == $Q->ep3_25) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_25" type="radio" value="2" required @if (isset($Q->ep3_25)) {{ (2 == $Q->ep3_25) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_25" type="radio" value="1" required @if (isset($Q->ep3_25)) {{ (1 == $Q->ep3_25) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_25', '<p class="help-block">:message</p>') !!}
    </div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
        <div class="p-2 border bg-light">26.ท่านคิดว่าท่านมีคุณภาพชีวิต (ชีวิตความเป็นอยู่) อยู่ในระดับใด</div>
    </div>
  </div>
<br>
    <div class="form-group {{ $errors->has('ep3_26') ? 'has-error' : ''}}">
        <div class="radio">
                <input name="ep3_26" type="radio" value="5" required @if (isset($Q->ep3_26)) {{ (5 == $Q->ep3_26) ? 'checked' : '' }} @else {{ '' }} @endif>
                ไม่เลย
            </div>
        <div class="radio">
                <input name="ep3_26" type="radio" value="4" required @if (isset($Q->ep3_26)) {{ (4 == $Q->ep3_26) ? 'checked' : '' }} @else {{ '' }} @endif>
                เล็กน้อย
            </div>
        <div class="radio">
                <input name="ep3_26" type="radio" value="3" required @if (isset($Q->ep3_26)) {{ (3 == $Q->ep3_26) ? 'checked' : '' }} @else {{ '' }} @endif>
                ปานกลาง
            </div>
        <div class="radio">
                <input name="ep3_26" type="radio" value="2" required @if (isset($Q->ep3_26)) {{ (2 == $Q->ep3_26) ? 'checked' : '' }} @else {{ '' }} @endif>
                มาก
            </div>
        <div class="radio">
                <input name="ep3_26" type="radio" value="1" required @if (isset($Q->ep3_26)) {{ (1 == $Q->ep3_26) ? 'checked' : '' }} @else {{ '' }} @endif>
                มากที่สุด
            </div>
            {!! $errors->first('ep3_26', '<p class="help-block">:message</p>') !!}
    </div>
<hr>
</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>
