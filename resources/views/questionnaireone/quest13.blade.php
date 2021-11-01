<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">1.นอนไม่เพียงพอ (เพราะผู้พิการตื่นบ่อยหรือร้องขอความช่วยเหลือฯลฯ)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_1') ? 'has-error' : ''}}">
    <div class="radio">
      <lable><input name="ep1_1" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_1) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_1" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_1) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_1', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>


<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">2.ไม่สะดวกในการดูแลผู้พิการ (เพราะ การดูแลผู้พิการติดเตียงต้องใช้เวลามากหรือต้องเดินทาง ฯลฯ)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_2') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_2" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_2) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_2" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_2) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_2', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">3.รู้สึกมีปัญหาทางกาย (เพราะ ต้องช่วยเหลือผู้พิการในการเคลื่อนย้าย และต้องใช้ความพยายามในการดูแลเอาใจใส่อย่างมาก)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_3') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_3" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_3" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_3', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">4.การดูแลผู้พิการทำให้ท่านไม่มีเวลาทำอย่างอื่น</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_4') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_4" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_4) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_4" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_4) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_4', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">5.การดูแลผู้พิการทำให้คนในครอบครัวต้องปรับตัว (เพราะการดูแลผู้พิการทำให้เกิดการเปลี่ยนแปลงเวลาการทำงานหรือกิจวัตรประจำวัน/หรือทำให้ไม่มีเวลาเป็นส่วนตัว)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_5') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_5" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_5" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_5', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">6.การดูแลผู้พิการทำให้ท่านต้องเปลี่ยนแผนการทำงานของท่าน (เช่น ต้องปฏิเสธงานที่ได้รับมอบหมาย หรือไม่สามารถไปเที่ยวหรือทำธุระส่วนตัวได้)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_6') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_6" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_6) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_6" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_6) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_6', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">7.ต้องให้เวลากับคนในครอบครัวมากขึ้น</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_7') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_7" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_7) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_7" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_7) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_7', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">8.ต้องพยายามปรับตัวหรือสภาพจิตใจและอารมณ์ (เพราะมักมีการขัดแย้งรุนแรงเกิดขึ้น)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_8') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_8" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_8) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_8" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_8) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_8', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">9.อาการหรือพฤติกรรมบางอย่างของผู้พิการทำให้ท่านวิตกกังวลหรือหนักใจ(เช่น ไม่สามารถควบคุมการขับถ่าย มีแผลกดทับ ฯลฯ)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_9') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_9" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_9) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_9" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_9) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_9', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">10.รู้สึกไม่สบายใจที่ผู้พิการด้านร่างกายไม่สามารถช่วยเหลือตนเองได้</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_10') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_10" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_10) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_10" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_10) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_10', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">11.ต้องมีการปรับตัวเรื่องการทำงาน (เช่น ต้องลางานเพื่อมาดูแลผู้พิการบ่อย ๆ)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_11') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_11" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_11) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_11" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_11) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_11', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">12.เกิดปัญหาด้านการเงิน</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_12') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_12" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_12) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_12" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_12) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_12', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
      <div class="p-2 border bg-light">13.รู้สึกว่ามีปัญหารุมเร้า (เช่น ท่านกังวลตลอดเวลาว่าจะแก้ปัญหาที่รุมเร้าได้อย่างไร)</div>
    </div>
  </div>
  <br>
  <div class="form-group {{ $errors->has('ep1_13') ? 'has-error' : ''}}">
    <div class="radio">
      <label><input name="ep1_13" type="radio" value="1" required @if (isset($Q)) {{ (1 == $Q->ep1_13) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ใช่
    </div>

    <div class="radio">
      <label><input name="ep1_13" type="radio" value="0" required @if (isset($Q)) {{ (0 == $Q->ep1_13) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
      ไม่
    </div>
    {!! $errors->first('ep1_13', '<p class="help-block">:message</p>') !!}
  </div>
  <hr>
</div></div></div></div></div></div></div></div></div></div></div></div></div>