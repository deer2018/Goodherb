<table class="table table-bordered">
<thead>
    <tr>
        <th scope="col">ข้อคำถาม</th></th>
        <th scope="col">ใช่</th> 
        <th scope="col">ไม่</th>
       
    </tr>
</thead>
<tbody>
    <tr>
        <td>นอนไม่เพียงพอ (เพราะผู้พิการตื่นบ่อยหรือร้องขอความช่วยเหลือฯลฯ)</td>
        <div class="form-group {{ $errors->has('ep1_1') ? 'has-error' : ''}}">        
        <td>
            <div class="radio">
                <label><input name="ep1_1" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_1) ? 'checked' : '' }}> </label>
            </div>
        </td>
        <td>
            <div class="radio">
                <label><input name="ep1_1" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_1) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div>
        </td>
        {!! $errors->first('ep1_1', '<p class="help-block">:message</p>') !!}
        </div>
    </tr>
  <tr>
    
    <td>ไม่สะดวกในการดูแลผู้พิการ (เพราะการดูแลผู้พิการติดเตียงต้องใช้เวลามาก
หรือต้องเดินทาง ฯลฯ)</td>
<div class="form-group {{ $errors->has('ep1_2') ? 'has-error' : ''}}">   
    <td>
        <div class="radio">
          <label><input name="ep1_2" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_2) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td>
        <div class="radio">
                <label><input name="ep1_2" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_2) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
    </td>
    {!! $errors->first('ep1_2', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>รู้สึกมีปัญหาทางกาย (เพราะต้องช่วยเหลือผู้พิการในการเคลื่อนย้าย และต้อง
ใช้ความพยายามในการดูแลเอาใจใส่อย่างมาก)</td>
<div class="form-group {{ $errors->has('ep1_3') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_3" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_3) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_3" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_3', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>การดูแลผู้พิการทำให้ท่านไม่มีเวลาทำอย่างอื่น
</td>
<div class="form-group {{ $errors->has('ep1_4') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_4" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_4) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_4" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_4) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_4', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>การดูแลผู้พิการทำให้คนในครอบครัวต้องปรับตัว (เพราะการดูแลผู้พิการทำให้เกิดการเปลี่ยนแปลงเวลาการทำงานหรือกิจวัตรประจำวัน/หรือทำให้ไม่มีเวลาเป็นส่วนตัว)
</td>
<div class="form-group {{ $errors->has('ep1_5') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_5" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_5) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_5" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_5', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>การดูแลผู้พิการทำให้ท่านต้องเปลี่ยนแผนการทำงานของท่าน (เช่นต้องปฏิเสธงานที่ได้รับมอบหมาย หรือไม่สามารถไปเที่ยวหรือทำธุระส่วนตัวได้)
</td>
<div class="form-group {{ $errors->has('ep1_6') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_6" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_6) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_6" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_6) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_6', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>ต้องให้เวลากับคนในครอบครัวมากขึ้น
</td>
<div class="form-group {{ $errors->has('ep1_7') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_7" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_7) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_7" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_7) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_7', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>ต้องพยายามปรับตัวหรือสภาพจิตใจและอารมณ์ (เพราะมักมีการขัดแย้งรุนแรงเกิดขึ้น)
</td>
<div class="form-group {{ $errors->has('ep1_8') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_8" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_8) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_8" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_8) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_8', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>อาการหรือพฤติกรรมบางอย่างของผู้พิการทำให้ท่านวิตกกังวลหรือหนักใจ(เช่น ไม่สามารถควบคุมการขับถ่าย มีแผลกดทับ ฯลฯ)
</td>
<div class="form-group {{ $errors->has('ep1_9') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_9" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_9) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_9" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_9) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_9', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>รู้สึกไม่สบายใจที่ผู้พิการด้านร่างกายไม่สามารถช่วยเหลือตนเองได้
</td>
<div class="form-group {{ $errors->has('ep1_10') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_10" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_10) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_10" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_10) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_10', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>ต้องมีการปรับตัวเรื่องการทำงาน (เช่นต้องลางานเพื่อมาดูแลผู้พิการบ่อย ๆ)
</td>
<div class="form-group {{ $errors->has('ep1_11') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_11" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_11) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_11" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_11) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_11', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>เกิดปัญหาด้านการเงิน
</td>
<div class="form-group {{ $errors->has('ep1_12') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_12" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_12) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_12" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_12) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_12', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  <tr>
    <td>รู้สึกว่ามีปัญหารุมเร้า (เช่นท่านกังวลตลอดเวลาว่าจะแก้ปัญหาที่รุมเร้าได้อย่างไร)
</td>
<div class="form-group {{ $errors->has('ep1_13') ? 'has-error' : ''}}">
    <td>
        <div class="radio">
          <label><input name="ep1_13" type="radio" value="1" {{ (isset($_q1) && 1 == $_q1->ep1_13) ? 'checked' : '' }}> </label>
        </div>
    </td>
    <td><div class="radio">
                <label><input name="ep1_13" type="radio" value="0" @if (isset($_q1)) {{ (0 == $_q1->ep1_13) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
        </div>
      </td>
      {!! $errors->first('ep1_13', '<p class="help-block">:message</p>') !!}
        </div>
  </tr>
  </tbody>
</table>