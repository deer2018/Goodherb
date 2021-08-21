@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบคัดเลือกอาสาสมัคร</div>
                    <div class="card-body">

                <!--แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    @include ('questionnaire.quest_select', ['formMode' => 'volunteer_questionnaire_sub4'])
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="{{ url('/volunteer_questionnaire_sub3') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
                <div class="col" style="text-align: right">
                <a href="{{ url('/volunteer_questionnaire_confirm') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                </div>
                </div>
                </td>

</div>
</div>
</div>
</div>
@endsection