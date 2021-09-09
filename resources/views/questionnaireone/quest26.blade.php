<table class="table table-bordered">
<thead>
        <tr>
        <th scope="col">ข้อที่</th>
        <th scope="col">ในช่วง 2 สัปดาห์ที่ผ่านมา</th> 
        <th scope="col">ไม่เลย</th>
        <th scope="col">เล็กน้อย</th>
        <th scope="col">ปานกลาง</th>
        <th scope="col">มาก</th>
        <th scope="col">มากที่สุด</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>ท่านพอใจกับสุขภาพของท่านในตอนนี้เพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_1') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_1" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_1" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_1" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_1" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_1" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_1', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>2</td>
        <td>การเจ็บปวดตามร่างกาย เช่น ปวดหัว ปวดท้อง ปวดตามตัว ทำให้ท่านไม่สามารถทำในสิ่งที่ต้องการมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_2') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_2" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_2" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_2" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_2" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_2" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_2', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>3</td>
        <td>ท่านมีกำลังเพียงพอที่จะทำสิ่งต่าง ๆ ในแต่ละวันไหม(ทั้งเรื่องงาน หรือการดำเนินชีวิตประจำวัน)</td>
        <div class="form-group {{ $errors->has('ep3_3') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_3" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_3" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_3" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_3" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_3" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_3', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>4</td>
        <td>ท่านพอใจกับการนอนหลับของท่านมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_4') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_4" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_4" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_4" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_4" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_4" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_4', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>5</td>
        <td>ท่านรู้สึกพึงพอใจในชีวิต (เช่น มีความสุข ความสงบ มีความหวัง) มากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_5') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_5" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_5" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_5" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_5" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_5" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_5', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
    <tr>
        <td>6</td>
        <td>ท่านมีสมาธิในการทำงานต่าง ๆ ดีเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_6') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_6" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_6" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_6" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_6" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_6" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_6', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>7</td>
        <td>ท่านรู้สึกพอใจในตนเองมากน้อยแค่ไหน</td>
        <div class="form-group {{ $errors->has('ep3_7') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_7" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_7" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_7" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_7" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_7" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_7', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>8</td>
        <td>ท่านยอมรับรูปร่างหน้าตาของตัวเองได้ไหม</td>
        <div class="form-group {{ $errors->has('ep3_8') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_8" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_8" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_8" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_8" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_8" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_8', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>9</td>
        <td>ท่านมีความรู้สึกไม่ดี เช่น รู้สึกเหงา เศร้า หดหู่ สิ้นหวังวิตกกังวล บ่อยแค่ไหน</td>
        <div class="form-group {{ $errors->has('ep3_9') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_9" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_9" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_9" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_9" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_9" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_9', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>10</td>
        <td>ท่านรู้สึกพอใจมากน้อยแค่ไหนที่สามารถทำอะไร ๆผ่านไปได้ในแต่ละวัน</td>
        <div class="form-group {{ $errors->has('ep3_10') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_10" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_10" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_10" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_10" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_10" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_10', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>11</td>
        <td>ท่านจำเป็นต้องไปรับการรักษาพยาบาลมากน้อยเพียงใดเพื่อที่จะทำงานหรือมีชีวิตอยู่ไปได้ในแต่ละวัน</td>
        <div class="form-group {{ $errors->has('ep3_11') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_11" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_11" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_11" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_11" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_11" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_11', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>12</td>
        <td>ท่านพอใจกับความสามารถในการทำงานได้อย่างที่เคยทำมามากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_12') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_12" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_12" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_12" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_12" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_12" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_12', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>13</td>
        <td>ท่านพอใจต่อการผูกมิตรหรือเข้ากับคนอื่น อย่างที่ผ่านมาแค่ไหน</td>
        <div class="form-group {{ $errors->has('ep3_13') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_13" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_13" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_13" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_13" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_13" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_13', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>14</td>
        <td>ท่านพอใจกับการช่วยเหลือที่เคยได้รับจากเพื่อน ๆ แค่ไหน</td>
        <div class="form-group {{ $errors->has('ep3_14') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_14" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_14" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_14" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_14" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_14" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_14', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>15</td>
        <td>ท่านรู้สึกว่าชีวิตมีความมั่นคงปลอดภัยดีไหมในแต่ละวัน</td>
        <div class="form-group {{ $errors->has('ep3_15') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_15" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_15" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_15" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_15" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_15" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_15', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>16</td>
        <td>ท่านพอใจกับสภาพบ้านเรือนที่อยู่ตอนนี้มากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_16') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_16" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_16" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_16" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_16" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_16" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_16', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>17</td>
        <td>ท่านมีเงินพอใช้จ่ายตามความจำเป็นมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_17') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_17" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_17" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_17" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_17" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_17" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_17', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>18</td>
        <td>ท่านพอใจที่จะสามารถไปใช้บริการสาธารณสุขได้ตามความจำเป็นเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_18') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_18" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_18" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_18" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_18" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_18" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_18', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>19</td>
        <td>ท่านได้รู้เรื่องราวข่าวสารที่จำเป็นในชีวิตแต่ละวันมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_19') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_19" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_19" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_19" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_19" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_19" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_19', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>20</td>
        <td>ท่านมีโอกาสได้พักผ่อนคลายเครียดมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_20') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_20" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_20" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_20" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_20" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_20" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_20', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>21</td>
        <td>สภาพแวดล้อมดีต่อสุขภาพของท่านมากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_21') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_21" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_21" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_21" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_21" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_21" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_21', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>22</td>
        <td>ท่านพอใจกับการเดินทางไปไหนมาไหนของท่าน(หมายถึงการคมนาคม) มากน้อยเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_22') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_22" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_22" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_22" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_22" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_22" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_22', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>23</td>
        <td>ท่านรู้สึกว่าชีวิตท่านมีความหมายมากน้อยแค่ไหน</td>
        <div class="form-group {{ $errors->has('ep3_23') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_23" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_23" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_23" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_23" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_23" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_23', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>24</td>
        <td>ท่านสามารถไปไหนมาไหนด้วยตนเองได้ดีเพียงใด</td>
        <div class="form-group {{ $errors->has('ep3_24') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_24" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_24" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_24" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_24" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_24" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_24', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>25</td>
        <td>(ชีวิตทางเพศ หมายถึง เมื่อเกิดความรู้สึกทางเพศขึ้นแล้วท่านมีวิธีจัดการทำให้ผ่อนคลายลงได้ รวมถึง การช่วยตัวเองหรือการมีเพศสัมพันธ์)</td>
        <div class="form-group {{ $errors->has('ep3_25') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_25" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_25" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_25" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_25" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_25" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_25', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
  <tr>
        <td>26</td>
        <td>ท่านคิดว่าท่านมีคุณภาพชีวิต (ชีวิตความเป็นอยู่)อยู่ในระดับใด</td>
        <div class="form-group {{ $errors->has('ep3_26') ? 'has-error' : ''}}">
        <td><div class="radio">
                <label><input name="ep3_26" type="radio" value="5" required> </label>
            </div></td>
        <td><div class="radio">
                <label><input name="ep3_26" type="radio" value="4" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_26" type="radio" value="3" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_26" type="radio" value="2" required> </label>
            </div</td>
        <td><div class="radio">
                <label><input name="ep3_26" type="radio" value="1" required> </label>
            </div</td>
            {!! $errors->first('ep3_26', '<p class="help-block">:message</p>') !!}
        	</div>
		</tr>
</tbody>
</table>
<div class="form-group d-none{{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'ไอดีผู้ใช้' }}</label>
    <input class="form-control" rows="5" name="content" type="text" id="content" value="{{ $id }}">
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>