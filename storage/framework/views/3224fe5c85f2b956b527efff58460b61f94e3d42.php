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
      <td> ซ่อนความรู้สึก เป็นฝ่ายยอม เพราะไม่อยากขัดแย้งกับคนใกล้ตัว ซ่อนไว้ทั้งความรู้สึกกังวล ความกลัว หรือ ความวิตกภายใต้การแสดงออกที่ยิ้มแย้ม ร่าเริง นานไปจะเก็บกด มีฟางเส้นสุดท้ายที่คนใกล้ตัวไม่รู้ ไม่แสดงความรู้สึกของตัวเอง</td>
      <div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="1" <?php echo e((isset($emotions) && 1 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
      
    </tr>
    <tr>
        <td>2</td>
      <td>กลัวในสิ่งที่ไม่รู้ว่ากลัวอะไร เป็นความกลัวที่ไม่มีเหตุผล เช่น กลัวความมืด กลัวที่แคบ รู้สึกกลัวขนหัวลุกโดยไม่มีสาเหตุ</td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="2" <?php echo e((isset($emotions) && 2 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>3</td>
      <td>ขี้บ่น เห็นความผิดพลาด ข้อด้อย นิสัย หรือ การขาดความสามารถของผู้อื่นเป็นสิ่งที่ทนไม่ได้ แต่อาจทำ หรือ เป็นในสิ่งที่ตัวเองบ่น ขาดความเข้าใจในความผิดพลาด ข้อด้อย นิสัย หรือ การขาดความสามารถของผู้อื่น</td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="3" <?php echo e((isset($emotions) && 3 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>4</td>
      <td>ไม่กล้าปฎิเสธใคร ยอมทุกอย่าง พูดคำว่า “ไม่” ไม่เป็น ไม่บ่น เพราะต้องการการยอมรับและต้องการความรัก เหนื่อยกับการยอมคนทุกคน เงียบ และ ไม่โต้แย้ง เป็นเหยื่อของการถูกกลั่นแกล้ง และ การถูกเอาเปรียบได้ง่าย
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="4" <?php echo e((isset($emotions) && 4 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>5</td>
      <td>ไม่มั่นใจในการตัดสินใจของตัวเอง และ ต้องการความคิดเห็นร่วมของผู้อื่นในการตัดสินใจ  มักจะถามความคิดเห็นของผู้อื่นร่วมในการตัดสินใจเสมอ แม้ว่าในใจจะมีคำตอบอยู่แล้ว</td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="5" <?php echo e((isset($emotions) && 5 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>6</td>
      <td>กลัวการสูญเสียการควบคุมตัวเองขณะโกรธ หรือ เสียใจ หรือ ผิดหวัง เหมาะกับคนขี้โมโห ที่มีแนวโน้มจะทำร้ายตัวเอง หรือผู้อื่น คนที่ควบคุมตัวเองไม่ได้
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="6" <?php echo e((isset($emotions) && 6 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>7</td>
      <td>ทำผิดพลาดด้วยความผิดซ้ำๆ เดิมๆ ไม่เรียนรู้จากความผิดพลาดในอดีต
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="7" <?php echo e((isset($emotions) && 7 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>8</td>
      <td>ห่วงใยคนที่รักมากเกินไป จนเข้าไปแทรกแซงชีวิตของคนที่รัก ทุ่มเทให้คนที่รัก และ หวังความรักตอบแทนที่เท่าเทียมกัน และ ผิดหวังมากมายเมื่อรู้สึกไม่ได้รับการตอบแทนที่เท่าเทียม
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="8" <?php echo e((isset($emotions) && 8 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>9</td>
      <td>จิตจรดจ่ออยู่กับเรื่องที่ยังมาไม่ถึง เรื่องในอนาคต จนไม่อยู่กับสภาวะปัจจุบัน ชอบฝันกลางวัน และ หมกมุ่นกับเรื่องในอนาคตของตัวเอง แต่ไม่ลงมือทำ ขาดสมาธิ ผู้ที่สมาธิสั้น
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="9" <?php echo e((isset($emotions) && 9 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
         <td>10</td>
      <td>รักความสะอาดอย่างมาก กลัวเชื้อโรค ย้ำคิดย้ำทำ หรือ ไม่พอใจรูปลักษณ์ของตัวเอง 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="10" <?php echo e((isset($emotions) && 10 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
       <td>11</td>
      <td>ปกติแล้วมีความมั่นใจ มีความสามารถ แต่เมื่อมีงาน หรือ มีความรับผิดชอบถาโถมเข้ามา ประเดประดัง หรือ มีความกดดัน ทำให้ขาดความมั่นใจ หรือ สติแตก หดหู่ อ่อนล้า ท้อถอย ใช้กับต่อมหมวกไตอ่อนแรงได้
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="11" <?php echo e((isset($emotions) && 11 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>12</td>
      <td>หมดหวัง ท้อแท้ง่าย ถอดใจง่าย เมื่อมีอุปสรรคขัดขวางเพียงเล็กน้อย 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="12" <?php echo e((isset($emotions) && 12 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>13</td>
      <td>มองโลกในแง่ร้าย และ รู้สึกสิ้นหวังโดยสิ้นเชิง ไม่มีความเชื่อ หรือ ความหวังว่าทุกสิ่งทุกอย่างจะดีขึ้น 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="13" <?php echo e((isset($emotions) && 13 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>14</td>
      <td>ไม่ชอบอยู่ตามลำพัง ชอบพูดคุยกับผู้คน พูดมาก แต่พูดเฉพาะเรื่องที่ตัวเองสนใจ พูดไม่หยุด ทำให้ผู้คนหลีกเลี่ยงและหนีหาย ทำให้ว้าเหว่
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="14" <?php echo e((isset($emotions) && 14 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>15</td>
      <td>มีความไม่ชอบใครคนใดคนหนึ่งอย่างเฉพาะเจาะจง และ รุนแรง
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="15" <?php echo e((isset($emotions) && 15 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>16</td>
      <td>จิตวนเวียนอยู่แต่เรื่องในอดีต ไม่ว่าอดีตนั้นจะดีหรือไม่ดี รุ่งโรจน์หรือล้มเหลว ผู้ที่ห่างบ้านแล้วคิดถึงบ้าน ผู้ที่เสียใจกับเรื่องในอดีต
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="16" <?php echo e((isset($emotions) && 16 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>17</td>
      <td>ผลัดวันประกันพรุ่ง รอจนนาทีสุดท้ายแล้วค่อยทำ หรือ ผู้ที่เหนื่อยหน่าย มีภาระที่งานมากเกินไป จนผลัดไปก่อนยังไม่ทำ เหนื่อยใจ 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="17" <?php echo e((isset($emotions) && 17 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>18</td>
      <td>มีความอดทนต่ำ มีความรู้สึกว่าคนอื่นช้าไปหมด มีแนวโน้มจะพูดจบประโยคแทนผู้อื่น เอางานมาทำคนเดียว เพราะผู้อื่นทำไม่ทันใจ 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="18" <?php echo e((isset($emotions) && 18 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>19</td>
      <td>ขาดความมั่นใจ รู้สึกด้อย รู้สึกความสามารถไม่พอ กลัวว่าจะทำได้ไม่ดี หรือ ทำไม่สำเร็จ เลยไม่ลงมือทำตั้งแต่ต้น ทำให้พลาดโอกาสดีๆในชีวิตไปหลายครั้ง
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="19" <?php echo e((isset($emotions) && 19 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>20</td>
      <td>กลัวในสิ่งที่รู้ว่ากลัวอะไร คนขี้อาย กลัวการเข้าสังคม 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="20" <?php echo e((isset($emotions) && 20 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>21</td>
      <td>รู้สึกหม่นหมอง เศร้าโศก ซึมเศร้า โดยไม่มีสาเหตุที่แน่ชัด เหมือนมีเมฆหมอกมาปกคลุมจิตใจ ทำให้จิตใจขาดความสดใส สว่างไสว
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="21" <?php echo e((isset($emotions) && 21 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>22</td>
      <td>มีความรับผิดชอบต้องดูแลผู้อื่น แข็งแรง ดูแลทุกคน ยกเว้นดูแลตัวเอง 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="22" <?php echo e((isset($emotions) && 22 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>23</td>
      <td>หมดแรงทั้งกายและใจ จากการทำงานหนัก หรือ ภาระหนัก ทั้งทางกายและทางใจ ทำให้หมดแรงในการดำเนินชีวิตประจำวัน
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="23" <?php echo e((isset($emotions) && 23 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>24</td>
      <td>โทษตัวเองในทุกเหตุการณ์ที่เกิดในชีวิต รู้สึกผิด รู้สึกว่าเป็นความผิดของตัวเอง และ ไม่พอใจกับการตัดสินใจของตัวเอง
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="24" <?php echo e((isset($emotions) && 24 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>25</td>
      <td>ห่วงกังวลคนที่รัก ในเรื่องความปลอดภัย สุขภาพ และ ภัยอันตรายต่างๆ เป็นความห่วงที่ทำให้มีแต่ความทุกข์จากความห่วงกังวล
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="25" <?php echo e((isset($emotions) && 25 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>26</td>
      <td>ตื่นตระหนกจนทำอะไรไม่ถูกเมื่อมีเหตุการณ์กระทันหัน เช่น พบเจออุบัติเหตุแล้วทำอะไรไม่ถูก เป็นตำรับที่เหมาะกับคนที่ตกใจแล้วคุมสติไม่อยู่ และ คนขี้ตกใจ
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="26" <?php echo e((isset($emotions) && 26 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>27</td>
      <td>นิยมความสมบูรณ์แบบ ใช่ หรือ ไม่ใช่ ขาว หรือ ดำ ซ้าย หรือ ขวา ไม่มีตรงกลาง มีความเป็นระเบียบเยอะมาก เข้มงวดกับตัวเองและผู้อื่นอย่างมาก
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="27" <?php echo e((isset($emotions) && 27 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>28</td>
      <td>ตัดสินใจอะไรไม่ได้เลย ไม่กล้าตัดสินใจ ไม่ถามใคร ไม่ตัดสินใจอะไรเลย ในชีวิตประจำวัน มีแต่ความลังเลไม่แน่ใจ
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="28" <?php echo e((isset($emotions) && 28 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>29</td>
      <td>ทุกข์ทรมานกับเรื่องที่ไม่คาดฝัน ข่าวร้าย อกหัก การสูญเสียไม่ว่า คน สัตว์ หรือ สิ่งของ ทรัพย์สิน
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="29" <?php echo e((isset($emotions) && 29 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>30</td>
      <td>รู้สึกสิ้นหวัง รู้สึกสูญเสียจนเหมือนไม่เหลืออะไรในชีวิต ไม่มีแสงสว่างที่ปลายอุโมงค์ มืดแปดด้าน คิดฆ่าตัวตาย
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="30" <?php echo e((isset($emotions) && 30 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>31</td>
      <td>มีความกระตือรือร้นสูงในการกระทำบางอย่าง เพื่อให้เกิดการเปลี่ยนแปลงที่ดีขึ้นสำหรับส่วนรวม 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="31" <?php echo e((isset($emotions) && 31 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>32</td>
      <td>มีความเป็นเผด็จการ และ ไม่ยืดหยุ่น จอมบงการ ก้าวร้าว
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="32" <?php echo e((isset($emotions) && 32 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>33</td>
      <td>เออออตามความคิดเห็นของกลุ่ม ซึ่งอาจจะขัดแย้งกับความคิดเห็นของตัวเอง 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="33" <?php echo e((isset($emotions) && 33 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>34</td>
      <td>สันโดษ และ รักการอยู่คนเดียว เมื่อมีผู้อื่นอยู่ร่วมจะรู้สึกอึดอัด รู้สึกใช้ชีวิตลำบาก 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="34" <?php echo e((isset($emotions) && 34 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>35</td>
      <td>มีเรื่องคิดวนเวียนอยู่ในหัวไม่เลิก จนไม่มีสมาธิพอจะอยู่กับสภาวะปัจจุบัน
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="35" <?php echo e((isset($emotions) && 35 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>36</td>
      <td>รู้สึกหลงทางในชีวิต ไม่พอใจในสภาวะปัจจุบัน แต่ไม่รู้จะเลือกไปทางไหน ไม่สามารถตัดสินใจเรื่องใหญ่ๆที่เป็นความสำคัญกับชีวิต  
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="36" <?php echo e((isset($emotions) && 36 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>37</td>
      <td>เบื่อๆเซ็งๆไม่อยากทำอะไร ขาดแรงกระตุ้นในการดำรงชีวิต ขาดแรงบันดาลใจ อยู่ไปวันๆแบบซังกะตาย 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="37" <?php echo e((isset($emotions) && 37 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>
    <tr>
        <td>38</td>
      <td>โทษผู้อื่นยกเว้นตัวเอง โทษทุกสิ่ง ไม่ยอมรับผิด 
      </td>
      <div div class="form-group <?php echo e($errors->has('emotion') ? 'has-error' : ''); ?>">
        <td>
          <div class="radio">
            <label><input name="emotion" type="radio" value="38" <?php echo e((isset($emotions) && 38 == $emotions->emotion) ? 'checked' : ''); ?>> </label>
          </div>
        </td>
    
        <?php echo $errors->first('emotion', '<p class="help-block">:message</p>'); ?>

      </div>
    </tr>



    <!-- ///////////////////////////// -->
  </tbody>
</table>


<?php /**PATH C:\xampp\htdocs\Goodherb\resources\views/questionnaireone/quest_medic.blade.php ENDPATH**/ ?>