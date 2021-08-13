@extends('layouts.app')

@section('content')
<div class="container">
      

      <div class="col-md-15">
          <div class="card">
              <div class="card-header">แบบสอบถาม</div>
              <div class="card-body">
                  <a href="{{ url('/medic_volunteer') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i> ย้อนกลับ
                  </a>
                  <br/>
                  <br/>

                  <div class="tab">
                      <button class="tablinks" onclick="openCity(event, '13')">แบบวัดความเครียดของผู้ดูแล 13 ข้อคำถาม</button>
                      <button class="tablinks" onclick="openCity(event, '5')">แบบประเมินความเครียด 5 ข้อคำถาม</button>
                      <button class="tablinks" onclick="openCity(event, '26')">เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก 26 ข้อคำถาม</button>
                      <button class="tablinks" onclick="openCity(event, 'sl')">แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม</button>
                  </div>
                  <br/>
                  <br/>

                  <div id="13" class="tabcontent">
                    @include ('questionnaire.quest13', ['formMode' => 'volunteer_questionnaire_sub'])
                  </div>

                  <div id="5" class="tabcontent">
                    @include ('questionnaire.quest5', ['formMode' => 'volunteer_questionnaire_sub'])
                  </div>

                  <div id="26" class="tabcontent">
                    @include ('questionnaire.quest26', ['formMode' => 'volunteer_questionnaire_sub'])
                  </div>

                  <div id="sl" class="tabcontent">
                    @include ('questionnaire.quest_select', ['formMode' => 'volunteer_questionnaire_sub'])
                  </div>
             
              </div>
              </div>
          </div>
       </div>
</div>
@endsection




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>