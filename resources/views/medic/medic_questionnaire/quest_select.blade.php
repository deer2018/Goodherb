<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">1.Feeding (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_1') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_1" type="radio" value="0" required @if (isset($_qt_4->ep4_1)) {{ (0 == $_qt_4->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้
            </div>
            <div class="radio">
                <input disabled name="ep4_1" type="radio" value="1" required @if (isset($_qt_4->ep4_1)) {{ (1 == $_qt_4->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif>  ตักอาหารเองได้แต่ต้องมีคนช่วย เช่น ช่วยใช้ช้อนตักเตรียมไว้ให้หรือตัดเป็นเล็กๆไว้ล่วงหน้า
            </div>
            <div class="radio">
                <input disabled name="ep4_1" type="radio" value="2" required @if (isset($_qt_4->ep4_1)) {{ (2 == $_qt_4->ep4_1) ? 'checked' : '' }} @else {{ '' }} @endif> ตักอาหารและช่วยตัวเองได้เป็นปกติ
            </div>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">2.Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา 24 - 28 ชั่วโมงที่ผ่านมา)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_2') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_2" type="radio" value="0" required @if (isset($_qt_4->ep4_2)) {{ (0 == $_qt_4->ep4_2) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องการความช่วยเหลือ
            </div>
            <div class="radio">
                <input disabled name="ep4_2" type="radio" value="1" required @if (isset($_qt_4->ep4_2)) {{ (1 == $_qt_4->ep4_2) ? 'checked' : '' }} @else {{ '' }} @endif> ทำเองได้ (รวมทั้งที่ทำได้เองถ้าเตรียมอุปกรณ์ไว้ให้)
            </div>
            {!! $errors->first('ep4_2', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">3.Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_3') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_3" type="radio" value="0" required @if (isset($_qt_4->ep4_3)) {{ (0 == $_qt_4->ep4_3) ? 'checked' : '' }} @else {{ '' }} @endif> ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ) หรือต้องใช้คนสองคนช่วยกันยกขึ้น
            </div>
            <div class="radio">
                <input disabled name="ep4_3" type="radio" value="1" required @if (isset($_qt_4->ep4_3)) {{ (1 == $_qt_4->ep4_3) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่น ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1คน หรือใช้คนทั่วไป 2 คนพยุงหรือดันขึ้นมาจึงจะนั่งอยู่ได้
            </div>
            <div class="radio">
                <input disabled name="ep4_3" type="radio" value="2" required @if (isset($_qt_4->ep4_3)) {{ (2 == $_qt_4->ep4_3) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องการความช่วยเหลือบ้าง เช่นบอกให้ทำตาม หรือช่วยพยุงเล็กน้อย หรือต้องมีคนดูแลเพื่อความปลอดภัย
            </div>
            <div class="radio">
                <input disabled name="ep4_3" type="radio" value="3" required @if (isset($_qt_4->ep4_3)) {{ (3 == $_qt_4->ep4_3) ? 'checked' : '' }} @else {{ '' }} @endif> ทำได้เอง
            </div>
            {!! $errors->first('ep4_3', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">4.Toilet use (ใช้ห้องน้ำ)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_4') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_4" type="radio" value="0" required @if (isset($_qt_4->ep4_4)) {{ (0 == $_qt_4->ep4_4) ? 'checked' : '' }} @else {{ '' }} @endif> ช่วยตัวเองไม่ได้
            </div>
            <div class="radio">
                <input disabled name="ep4_4" type="radio" value="1" required @if (isset($_qt_4->ep4_4)) {{ (1 == $_qt_4->ep4_4) ? 'checked' : '' }} @else {{ '' }} @endif> ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้หลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือในบางสิ่ง
            </div>
            <div class="radio">
                <input disabled name="ep4_4" type="radio" value="2" required @if (isset($_qt_4->ep4_4)) {{ (2 == $_qt_4->ep4_4) ? 'checked' : '' }} @else {{ '' }} @endif> ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้ ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระถอดใส่เสื้อผ้าได้เรียบร้อย)
            </div>
            {!! $errors->first('ep4_4', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">5.Mobility (การเคลื่อนที่ภายในห้องหรือบ้าน)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_5') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_5" type="radio" value="0" required @if (isset($_qt_4->ep4_5)) {{ (0 == $_qt_4->ep4_5) ? 'checked' : '' }} @else {{ '' }} @endif> เคลื่อนที่ไปไหนไม่ได้
            </div>
            <div class="radio">
                <input disabled name="ep4_5" type="radio" value="1" required @if (isset($_qt_4->ep4_5)) {{ (1 == $_qt_4->ep4_5) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และจะต้องเข้าออกมุมห้องหรือประตูได้
            </div>
            <div class="radio">
                <input disabled name="ep4_5" type="radio" value="2" required @if (isset($_qt_4->ep4_5)) {{ (2 == $_qt_4->ep4_5) ? 'checked' : '' }} @else {{ '' }} @endif> เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย
            </div>
            <div class="radio">
                <input disabled name="ep4_5" type="radio" value="3" required @if (isset($_qt_4->ep4_5)) {{ (3 == $_qt_4->ep4_5) ? 'checked' : '' }} @else {{ '' }} @endif> เดินหรือเคลื่อนที่ได้เอง
            </div>
            {!! $errors->first('ep4_5', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">6.Dressing (การสวมใส่เสื้อผ้า)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_6') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_6" type="radio" value="0" required @if (isset($_qt_4->ep4_6)) {{ (0 == $_qt_4->ep4_6) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย
            </div>
            <div class="radio">
                <input disabled name="ep4_6" type="radio" value="1" required @if (isset($_qt_4->ep4_6)) {{ (1 == $_qt_4->ep4_6) ? 'checked' : '' }} @else {{ '' }} @endif> ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย
            </div>
            <div class="radio">
                <input disabled name="ep4_6" type="radio" value="2" required @if (isset($_qt_4->ep4_6)) {{ (2 == $_qt_4->ep4_6) ? 'checked' : '' }} @else {{ '' }} @endif> ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิบ หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)
            </div>
            {!! $errors->first('ep4_6', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">7.Stairs (การขึ้นลงบันได 1 ชั้น)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_7') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_7" type="radio" value="0" required @if (isset($_qt_4->ep4_7)) {{ (0 == $_qt_4->ep4_7) ? 'checked' : '' }} @else {{ '' }} @endif> ไม่สามารถทำได้
            </div>
            <div class="radio">
                <input disabled name="ep4_7" type="radio" value="1" required @if (isset($_qt_4->ep4_7)) {{ (1 == $_qt_4->ep4_7) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องการคนช่วย
            </div>
            <div class="radio">
                <input disabled name="ep4_7" type="radio" value="2" required @if (isset($_qt_4->ep4_7)) {{ (2 == $_qt_4->ep4_7) ? 'checked' : '' }} @else {{ '' }} @endif> ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น walker จะต้องเอาขึ้นลงได้ด้วย)
            </div>
            {!! $errors->first('ep4_7', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">8.Bathing (การอาบน้ำ)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_8') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_8" type="radio" value="0" required @if (isset($_qt_4->ep4_8)) {{ (0 == $_qt_4->ep4_8) ? 'checked' : '' }} @else {{ '' }} @endif> ต้องมีคนช่วยหรือทำให้
            </div>
            <div class="radio">
                <input disabled name="ep4_8" type="radio" value="1" required @if (isset($_qt_4->ep4_8)) {{ (1 == $_qt_4->ep4_8) ? 'checked' : '' }} @else {{ '' }} @endif> อาบน้ำเองได้
            </div>
            {!! $errors->first('ep4_8', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">9.Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1 สัปดาห์ที่ผ่านมา)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_9') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_9" type="radio" value="0" required @if (isset($_qt_4->ep4_9)) {{ (0 == $_qt_4->ep4_9) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ
            </div>
            <div class="radio">
                <input disabled name="ep4_9" type="radio" value="1" required @if (isset($_qt_4->ep4_9)) {{ (1 == $_qt_4->ep4_9) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์)
            </div>
            <div class="radio">
                <input disabled name="ep4_9" type="radio" value="2" required @if (isset($_qt_4->ep4_9)) {{ (2 == $_qt_4->ep4_9) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นได้เป็นปกติ
            </div>
            {!! $errors->first('ep4_9', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>

<div class="container px-0">
  <div class="row gx-5">
    <div class="col">
     <div class="p-2 border bg-light">10.Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)</div>
    </div>
  </div>
<br>
        <div class="form-group {{ $errors->has('ep4_10') ? 'has-error' : ''}}">
            <div class="radio">
                <input disabled name="ep4_10" type="radio" value="0" required @if (isset($_qt_4->ep4_10)) {{ (0 == $_qt_4->ep4_10) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลเองได้
            </div>
            <div class="radio">
                <input disabled name="ep4_10" type="radio" value="1" required @if (isset($_qt_4->ep4_10)) {{ (1 == $_qt_4->ep4_10) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละ 1 ครั้ง)
            </div>
            <div class="radio">
                <input disabled name="ep4_10" type="radio" value="2" required @if (isset($_qt_4->ep4_10)) {{ (2 == $_qt_4->ep4_10) ? 'checked' : '' }} @else {{ '' }} @endif> กลั้นได้เป็นปกติ
            </div>
            {!! $errors->first('ep4_10', '<p class="help-block">:message</p>') !!}
        	</div>
<hr>
</div></div></div></div></div></div></div></div></div></div>

