<table class="table table-bordered">
        <thead>
        <tr>
            <th>คำถาม</th>
            <th>คะแนน</th> 
         </tr>
       <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">1. Feeding (รับประทานอาหารเมื่อเตรียมสำรับไว้ให้เรียบร้อยต่อหน้า)</td>
            <div class="form-group {{ $errors->has('ep4_1') ? 'has-error' : ''}}">
            <td><div class="radio">
                <label><input name="ep4_1" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_1) ? 'checked' : '' }}> </label>
            </div> ไม่สามารถตักอาหารเข้าปากได้ ต้องมีคนป้อนให้</td>
         </tr>
         <tr>
            <td><div class="radio">
                <label><input name="ep4_1" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_1) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ตักอาหารเองได้แต่ต้องมีคนช่วย เช่น ช่วยใช้ช้อนตักเตรียมไว้ให้หรือตัดเป็นเล็กๆไว้ล่วงหน้า</td>
         </tr>
         <tr>
            <td><div class="radio">
                <label><input name="ep4_1" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_1) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ตักอาหารและช่วยตัวเองได้เป็นปกติ</td>
            {!! $errors->first('ep4_1', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "2">2. Grooming (ล้างหน้า หวีผม แปรงฟัน โกนหนวด ในระยะเวลา 24 - 28 ชั่วโมงที่ผ่านมา)</td>
            <div class="form-group {{ $errors->has('ep4_2') ? 'has-error' : ''}}">
            <td><div class="radio">
                <label><input name="ep4_2" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_2) ? 'checked' : '' }}> </label>
            </div> ต้องการความช่วยเหลือ</td>
         </tr>
         <tr>
            <td><div class="radio">
                <label><input name="ep4_2" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_2) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ทำเองได้ (รวมทั้งที่ท าได้เองถ้าเตรียมอุปกรณ์ไว้ให้)</td>
            {!! $errors->first('ep4_2', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "4">3. Transfer (ลุกนั่งจากที่นอน หรือจากเตียงไปยังเก้าอี้)</td>
            <div class="form-group {{ $errors->has('ep4_3') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_3" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_3) ? 'checked' : '' }}> </label>
            </div> ไม่สามารถนั่งได้ (นั่งแล้วจะล้มเสมอ) หรือต้องใช้คนสองคนช่วยกันยกขึ้น</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_3" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ต้องการความช่วยเหลืออย่างมากจึงจะนั่งได้ เช่น ต้องใช้คนที่แข็งแรงหรือมีทักษะ 1คน หรือใช้คน
   ทั่วไป 2 คนพยุงหรือดันขึ้นมาจึงจะนั่งอยู่ได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_3" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ต้องการความช่วยเหลือบ้าง เช่นบอกให้ทำตาม หรือช่วยพยุงเล็กน้อย หรือต้องมีคนดูแลเพื่อความปลอดภัย</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_3" type="radio" value="3" @if (isset($_q1)) {{ (3 == $_q1->ep4_3) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ทำได้เอง</td>
            {!! $errors->first('ep4_3', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
        <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">4. Toilet use (ใช้ห้องน้ำ)</td>
            <div class="form-group {{ $errors->has('ep4_4') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_4" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_4) ? 'checked' : '' }}> </label>
            </div> ช่วยตัวเองไม่ได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_4" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_4) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ทำเองได้บ้าง (อย่างน้อยทำความสะอาดตัวเองได้หลังจากเสร็จธุระ) แต่ต้องการความช่วยเหลือในบางสิ่ง</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_4" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_4) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ช่วยตัวเองได้ดี (ขึ้นนั่งและลงจากโถส้วมเองได้ ทำความสะอาดได้เรียบร้อยหลังจากเสร็จธุระ
   ถอดใส่เสื้อผ้าได้เรียบร้อย)</td>
               {!! $errors->first('ep4_4', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "4">5. Mobility (การเคลื่อนที่ภายในห้องหรือบ้าน)</td>
            <div class="form-group {{ $errors->has('ep4_5') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_5" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_5) ? 'checked' : '' }}> </label>
            </div> เคลื่อนที่ไปไหนไม่ได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_5" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ต้องใช้รถเข็นช่วยตัวเองให้เคลื่อนที่ได้เอง (ไม่ต้องมีคนเข็นให้) และจะต้องเข้าออกมุมห้อง
   หรือประตูได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_5" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> เดินหรือเคลื่อนที่โดยมีคนช่วย เช่น พยุง หรือบอกให้ทำตาม หรือต้องให้ความสนใจดูแลเพื่อความปลอดภัย</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_5" type="radio" value="3" @if (isset($_q1)) {{ (3 == $_q1->ep4_5) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> เดินหรือเคลื่อนที่ได้เอง</td>
            {!! $errors->first('ep4_5', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">6. Dressing (การสวมใส่เสื้อผ้า)</td>
            <div class="form-group {{ $errors->has('ep4_6') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_6" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_6) ? 'checked' : '' }}> </label>
            </div> ต้องมีคนสวมใส่ให้ ช่วยตัวเองแทบไม่ได้หรือได้น้อย</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_6" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_6) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ช่วยตัวเองได้ประมาณร้อยละ 50 ที่เหลือต้องมีคนช่วย</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_6" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_6) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ช่วยตัวเองได้ดี (รวมทั้งการติดกระดุม รูดซิบ หรือใช้เสื้อผ้าที่ดัดแปลงให้เหมาะสมก็ได้)</td>
            {!! $errors->first('ep4_6', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">7. Stairs (การขึ้นลงบันได 1 ชั้น)</td>
            <div class="form-group {{ $errors->has('ep4_7') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_7" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_7) ? 'checked' : '' }}> </label>
            </div> ไม่สามารถทำได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_7" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_7) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ต้องการคนช่วย</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_7" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_7) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> ขึ้นลงได้เอง (ถ้าต้องใช้เครื่องช่วยเดิน เช่น walker จะต้องเอาขึ้นลงได้ด้วย)</td>
            {!! $errors->first('ep4_7', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
         <tr>
            <td rowspan = "2">8. Bathing (การอาบน้ำ)</td>
            <div class="form-group {{ $errors->has('ep4_8') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_8" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_8) ? 'checked' : '' }}> </label>
            </div> ต้องมีคนช่วยหรือทำให้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_8" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_8) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> อาบน้ำเองได้</td>
            {!! $errors->first('ep4_8', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
          <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">9. Bowels (การกลั้นการถ่ายอุจจาระในระยะ 1 สัปดาห์ที่ผ่านมา)</td>
            <div class="form-group {{ $errors->has('ep4_9') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_9" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_9) ? 'checked' : '' }}> </label>
            </div> กลั้นไม่ได้ หรือต้องการการสวนอุจจาระอยู่เสมอ</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_9" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_9) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่า 1 ครั้งต่อสัปดาห์)</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_9" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_9) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> กลั้นได้เป็นปกติ</td>
            {!! $errors->first('ep4_9', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
        <!--////////////////////////////// -->
         <tr>
            <td rowspan = "3">10. Bladder (การกลั้นปัสสาวะในระยะ 1 สัปดาห์ที่ผ่านมา)</td>
            <div class="form-group {{ $errors->has('ep4_10') ? 'has-error' : ''}}">
            <td><td><div class="radio">
                <label><input name="ep4_10" type="radio" value="0" {{ (isset($_q1) && 0 == $_q1->ep4_10) ? 'checked' : '' }}> </label>
            </div> กลั้นไม่ได้ หรือใส่สายสวนปัสสาวะแต่ไม่สามารถดูแลเองได้</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_10" type="radio" value="1" @if (isset($_q1)) {{ (1 == $_q1->ep4_10) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> กลั้นไม่ได้บางครั้ง (เป็นน้อยกว่าวันละ 1 ครั้ง)</td>
         </tr>
         <tr>
            <td><td><div class="radio">
                <label><input name="ep4_10" type="radio" value="2" @if (isset($_q1)) {{ (2 == $_q1->ep4_10) ? 'checked' : '' }} @else {{ 'checked' }} @endif> </label>
            </div> กลั้นได้เป็นปกติ</td>
            {!! $errors->first('ep4_10', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
         <tr>
            <td colspan = "3"></td>
         </tr>
         <!--////////////////////////////// -->
        </tbody>
	</table>
