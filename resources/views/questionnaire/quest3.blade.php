@extends('layouts.app')

@section('content')
<div class="container">
      

<div class="col-md-10">
<div class="card">
<div class="card-header">แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้</div>
<div class="card-body">

<table class="table table-bordered">
<thead>

<tr>
            <th><h5><b> คำถามต่อไปนี้เป็นคำถามภายหลังการได้รับการวินิจฉัยและให้การบำบัดจากแพทย์/ผู้เชี่ยวชาญ เป็นระยะเวลา 14 วันในการรับประทานน้ำดอกไม้บาค</b></h5> </th> 
</tr>

<!--////////////////////////////// -->

<tr>
            <td><input id="qt3_s1_rd0" type="radio" name="quest3_1" value="rd0"> 1.ท่านไม่เคยทานตลอดระยะเวลา 14 วัน</td>
</tr>

<!--////////////////////////////// -->

<tr>
            <td><input id="qt3_s1_rd0" type="radio" name="quest3_2" value="rd0"> 2.ท่านลืมรับประทานเป็นบางครังตลอดระยะเวลา 14 วัน <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="qt3_s1_rd1" type="radio" name="quest3_2" value="rd1"> 2-1.ลืม 1 ครั้ง <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="qt3_s1_rd2" type="radio" name="quest3_2" value="rd2"> 2-2.ลืม 2 ครั้ง <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="qt3_s1_rd3" type="radio" name="quest3_2" value="rd3"> 2-3.ลืมมากกว่า 2 ครั้ง
        </td>
            
</tr>

<!--////////////////////////////// -->

<tr>
            <td><input id="qt3_s1_rd0" type="radio" name="quest3_3" value="rd0"> 3.ท่านไม่ได้ประทานเลยตลอดระยะเวลา 14 วัน</td>
</tr>

</table>
</thead>

<td>
<div class="row">
<div class="col" style="text-align: left">
<a href="{{ url('/quest26_2') }}">ย้อนกลับ</a></div>
<div class="col" style="text-align: right">
<a href="{{ url('/volunteer_questionnaire_confirm') }}">ยืนยัน<br></a>
</div>
</div>
</td>

</div>
</div>
</div>
</div>
@endsection
