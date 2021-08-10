@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถาม</div>
                    <div class="card-body">

<div class="tab">
  <button class="tablinks" onclick="openCity(event, '13')">แบบสอบถาม 13 ข้อ</button>
  <button class="tablinks" onclick="openCity(event, '5')">แบบสอบถาม 5 ข้อ</button>
  <button class="tablinks" onclick="openCity(event, '26')">แบบสอบถาม 26 ข้อ</button>
</div>

<div id="13" class="tabcontent">
    @include ('questionnaire.quest13', ['formMode' => 'volunteer_questionnaire_sub'])
</div>

<div id="5" class="tabcontent">
    @include ('questionnaire.quest5', ['formMode' => 'volunteer_questionnaire_sub'])
</div>

<div id="26" class="tabcontent">
    @include ('questionnaire.quest26', ['formMode' => 'volunteer_questionnaire_sub'])
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