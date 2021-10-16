<table class="table ">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>     
      <th scope="col">ลักษณะภาวะอารมณ์</th>
      <th scope="col"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1</td>
      <td> ซ่อนความรู้สึก เป็นฝ่ายยอม เพราะไม่อยากขัดแย้งกับคนใกล้ตัว ซ่อนไว้ทั้งความรู้สึก
กังวล ความกลัว หรือ ความวิตกภายใต้การแสดงออกที่ยิ้มแย้ม ร่าเริง นานไปจะเก็บกด 
มีฟางเส้นสุดท้ายที่คนใกล้ตัวไม่รู้ ไม่แสดงความรู้สึกของตัวเอง</td>
      <div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="1" {{ (isset($emotions) && 1 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
      
    </tr>
    <tr>
        <td>2</td>
      <td>กลัวในสิ่งที่ไม่รู้ว่ากลัวอะไร เป็นความกลัวที่ไม่มีเหตุผล เช่น กลัวความมืด กลัวที่แคบ 
รู้สึกกลัวขนหัวลุกโดยไม่มีสาเหต</td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="2" {{ (isset($emotions) && 2 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>3</td>
      <td>ขี้บ่น เห็นความผิดพลาด ข้อด้อย นิสัย หรือ การขาดความสามารถของผู้อื่นเป็นสิ่งที่ทน
ไม่ได้ แต่อาจท า หรือ เป็นในสิ่งที่ตัวเองบ่น ขาดความเข้าใจในความผิดพลาด ข้อด้อย 
นิสัย หรือ การขาดความสามารถของผู้อื่น</td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="3" {{ (isset($emotions) && 3 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>4</td>
      <td>ไม่กล้าปฎิเสธใคร ยอมทุกอย่าง พูดค าว่า “ไม่” ไม่เป็น ไม่บ่น เพราะต้องการการยอมรับ
และต้องการความรัก เหนื่อยกับการยอมคนทุกคน เงียบ และ ไม่โต้แย้ง เป็นเหยื่อของ
การถูกกลั่นแกล้ง และ การถูกเอาเปรียบได้ง่าย
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="4" {{ (isset($emotions) && 4 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>5</td>
      <td>ไม่มั่นใจในการตัดสินใจของตัวเอง และ ต้องการความคิดเห็นร่วมของผู้อื่นในการ
ตัดสินใจ มักจะถามความคิดเห็นของผู้อื่นร่วมในการตัดสินใจเสมอ แม้ว่าในใจจะมี
ค าตอบอยู่แล้ว
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="5" {{ (isset($emotions) && 5 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>6</td>
      <td>กลัวการสูญเสียการควบคุมตัวเองขณะโกรธ หรือ เสียใจ หรือ ผิดหวัง เหมาะกับคนขี้
โมโห ที่มีแนวโน้มจะทำร้ายตัวเอง หรือผู้อื่น คนที่ควบคุมตัวเองไม่ได
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="6" {{ (isset($emotions) && 6 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>7</td>
      <td>ทำผิดพลาดด้วยความผิดซ้าๆ เดิมๆ ไม่เรียนรู้จากความผิดพลาดในอดีต
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="7" {{ (isset($emotions) && 7 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>8</td>
      <td>ห่วงใยคนที่รักมากเกินไป จนเข้าไปแทรกแซงชีวิตของคนที่รัก ทุ่มเทให้คนที่รัก และ หวัง
ความรักตอบแทนที่เท่าเทียมกัน และ ผิดหวังมากมายเมื่อรู้สึกไม่ได้รับการตอบแทนที่
เท่าเทียม
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="8" {{ (isset($emotions) && 8 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>9</td>
      <td>จิตจรดจ่ออยู่กับเรื่องที่ยังมาไม่ถึง เรื่องในอนาคต จนไม่อยู่กับสภาวะปัจจุบัน ชอบฝัน
กลางวัน และ หมกมุ่นกับเรื่องในอนาคตของตัวเอง แต่ไม่ลงมือท า ขาดสมาธิ ผู้ที่สมาธิ
สั้น
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="9" {{ (isset($emotions) && 9 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
         <td>10</td>
      <td>รักความสะอาดอย่างมาก กลัวเชื้อโรค ย้ าคิดย้ าท า หรือ ไม่พอใจรูปลักษณ์ของตัวเอง 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="10" {{ (isset($emotions) && 10 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
       <td>11</td>
      <td>ปกติแล้วมีความมั่นใจ มีความสามารถ แต่เมื่อมีงาน หรือ มีความรับผิดชอบถาโถมเข้า
มา ประเดประดัง หรือ มีความกดดัน ท าให้ขาดความมั่นใจ หรือ สติแตก หดหู่ อ่อนล้า 
ท้อถอย ใช้กับต่อมหมวกไตอ่อนแรงได้
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="11" {{ (isset($emotions) && 11 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>12</td>
      <td>หมดหวัง ท้อแท้ง่าย ถอดใจง่าย เมื่อมีอุปสรรคขัดขวางเพียงเล็กน้อย 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="12" {{ (isset($emotions) && 12 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>13</td>
      <td>มองโลกในแง่ร้าย และ รู้สึกสิ้นหวังโดยสิ้นเชิง ไม่มีความเชื่อ หรือ ความหวังว่าทุกสิ่งทุก
อย่างจะดีขึ้น 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="13" {{ (isset($emotions) && 13 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>14</td>
      <td>ไม่ชอบอยู่ตามล าพัง ชอบพูดคุยกับผู้คน พูดมาก แต่พูดเฉพาะเรื่องที่ตัวเองสนใจ พูดไม่
หยุด ท าให้ผู้คนหลีกเลี่ยงและหนีหาย ท าให้ว้าเหว่
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="14" {{ (isset($emotions) && 14 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>15</td>
      <td>มีความไม่ชอบใครคนใดคนหนึ่งอย่างเฉพาะเจาะจง และ รุนแรง
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="15" {{ (isset($emotions) && 15 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>16</td>
      <td>จิตวนเวียนอยู่แต่เรื่องในอดีต ไม่ว่าอดีตนั้นจะดีหรือไม่ดี รุ่งโรจน์หรือล้มเหลว ผู้ที่ห่าง
บ้านแล้วคิดถึงบ้าน ผู้ที่เสียใจกับเรื่องในอดีต
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="16" {{ (isset($emotions) && 16 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>17</td>
      <td>ผลัดวันประกันพรุ่ง รอจนนาทีสุดท้ายแล้วค่อยท า หรือ ผู้ที่เหนื่อยหน่าย มีภาระที่งาน
มากเกินไป จนผลัดไปก่อนยังไม่ท า เหนื่อยใจ 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="17" {{ (isset($emotions) && 17 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>18</td>
      <td> มีความอดทนต่ า มีความรู้สึกว่าคนอื่นช้าไปหมด มีแนวโน้มจะพูดจบประโยคแทนผู้อื่น 
เอางานมาท าคนเดียว เพราะผู้อื่นท าไม่ทันใจ 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="18" {{ (isset($emotions) && 18 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>19</td>
      <td>ขาดความมั่นใจ รู้สึกด้อย รู้สึกความสามารถไม่พอ กลัวว่าจะท าได้ไม่ดี หรือ ท าไม่ส าเร็จ 
เลยไม่ลงมือท าตั้งแต่ต้น ท าให้พลาดโอกาสดีๆในชีวิตไปหลายครั้ง
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="19" {{ (isset($emotions) && 19 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>20</td>
      <td>กลัวในสิ่งที่รู้ว่ากลัวอะไร คนขี้อาย กลัวการเข้าสังคม 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="20" {{ (isset($emotions) && 20 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>21</td>
      <td>รู้สึกหม่นหมอง เศร้าโศก ซึมเศร้า โดยไม่มีสาเหตุที่แน่ชัด เหมือนมีเมฆหมอกมาปกคลุม
จิตใจ ท าให้จิตใจขาดความสดใส สว่างไสว
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="21" {{ (isset($emotions) && 21 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>22</td>
      <td>มีความรับผิดชอบต้องดูแลผู้อื่น แข็งแรง ดูแลทุกคน ยกเว้นดูแลตัวเอง 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="22" {{ (isset($emotions) && 22 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>23</td>
      <td>หมดแรงทั้งกายและใจ จากการท างานหนัก หรือ ภาระหนัก ทั้งทางกายและทางใจ ท า
ให้หมดแรงในการด าเนินชีวิตประจ าวัน
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="23" {{ (isset($emotions) && 23 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>24</td>
      <td>โทษตัวเองในทุกเหตุการณ์ที่เกิดในชีวิต รู้สึกผิด รู้สึกว่าเป็นความผิดของตัวเอง และ ไม่
พอใจกับการตัดสินใจของตัวเอง
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="24" {{ (isset($emotions) && 24 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>25</td>
      <td>ห่วงกังวลคนที่รัก ในเรื่องความปลอดภัย สุขภาพ และ ภัยอันตรายต่างๆ เป็นความห่วง
ที่ท าให้มีแต่ความทุกข์จากความห่วงกังวล
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="25" {{ (isset($emotions) && 25 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>26</td>
      <td>ตื่นตระหนกจนท าอะไรไม่ถูกเมื่อมีเหตุการณ์กระทันหัน เช่น พบเจออุบัติเหตุแล้วท า
อะไรไม่ถูก เป็นต ารับที่เหมาะกับคนที่ตกใจแล้วคุมสติไม่อยู่ และ คนขี้ตกใจ
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="26" {{ (isset($emotions) && 26 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>27</td>
      <td>นิยมความสมบูรณ์แบบ ใช่ หรือ ไม่ใช่ ขาว หรือ ด า ซ้าย หรือ ขวา ไม่มีตรงกลาง มี
ความเป็นระเบียบเยอะมาก เข้มงวดกับตัวเองและผู้อื่นอย่างมาก
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="27" {{ (isset($emotions) && 27 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>28</td>
      <td> ตัดสินใจอะไรไม่ได้เลย ไม่กล้าตัดสินใจ ไม่ถามใคร ไม่ตัดสินใจอะไรเลย ใน
ชีวิตประจ าวัน มีแต่ความลังเลไม่แน่ใจ
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="28" {{ (isset($emotions) && 28 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>29</td>
      <td>ทุกข์ทรมานกับเรื่องที่ไม่คาดฝัน ข่าวร้าย อกหัก การสูญเสียไม่ว่า คน สัตว์ หรือ สิ่งของ 
ทรัพย์สิน
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="29" {{ (isset($emotions) && 29 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>30</td>
      <td>รู้สึกสิ้นหวัง รู้สึกสูญเสียจนเหมือนไม่เหลืออะไรในชีวิต ไม่มีแสงสว่างที่ปลายอุโมงค์ มืด
แปดด้าน คิดฆ่าตัวตาย
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="30" {{ (isset($emotions) && 30 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>31</td>
      <td>มีความกระตือรือร้นสูงในการกระท าบางอย่าง เพื่อให้เกิดการเปลี่ยนแปลงที่ดีขึ้นส าหรับ
ส่วนรวม 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="31" {{ (isset($emotions) && 31 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>32</td>
      <td>มีความกระตือรือร้นสูงในการกระท าบางอย่าง เพื่อให้เกิดการเปลี่ยนแปลงที่ดีขึ้นส าหรับ
ส่วนรวม 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="32" {{ (isset($emotions) && 32 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>33</td>
      <td>เออออตามความคิดเห็นของกลุ่ม ซึ่งอาจจะขัดแย้งกับความคิดเห็นของตัวเอง 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="33" {{ (isset($emotions) && 33 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>34</td>
      <td>สันโดษ และ รักการอยู่คนเดียว เมื่อมีผู้อื่นอยู่ร่วมจะรู้สึกอึดอัด รู้สึกใช้ชีวิตล าบาก 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="34" {{ (isset($emotions) && 34 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>35</td>
      <td>สันโดษ และ รักการอยู่คนเดียว เมื่อมีผู้อื่นอยู่ร่วมจะรู้สึกอึดอัด รู้สึกใช้ชีวิตล าบาก 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="35" {{ (isset($emotions) && 35 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>36</td>
      <td>รู้สึกหลงทางในชีวิต ไม่พอใจในสภาวะปัจจุบัน แต่ไม่รู้จะเลือกไปทางไหน ไม่สามารถ
ตัดสินใจเรื่องใหญ่ๆที่เป็นความส าคัญกับชีวิต 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="36" {{ (isset($emotions) && 36 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>37</td>
      <td> เบื่อๆเซ็งๆไม่อยากท าอะไร ขาดแรงกระตุ้นในการด ารงชีวิต ขาดแรงบันดาลใจ อยู่ไป
วันๆแบบซังกะตาย 
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="37" {{ (isset($emotions) && 37 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>
    <tr>
        <td>38</td>
      <td>โทษผู้อื่นยกเว้นตัวเอง โทษทุกสิ่ง ไม่ยอมรับผิด
      </td>
      <div div class="form-group {{ $errors->has('emotion') ? 'has-error' : ''}}">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="38" {{ (isset($emotions) && 38 == $emotions->emotion) ? 'checked' : '' }}> </label>
          </div>
        </td>
    
        {!! $errors->first('emotion', '<p class="help-block">:message</p>') !!}
      </div>
    </tr>



    <!-- ///////////////////////////// -->
  </tbody>
</table>


