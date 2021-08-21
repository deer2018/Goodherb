@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้</div>
                    <div class="card-body">

                <!--แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้ -->

                <div id="13" class="tabcontent">
                    @include ('questionnaire.quest3', ['formMode' => 'volunteer_questionnaire_sub4_2'])
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="{{ url('/volunteer_questionnaire_sub3_2') }}" class="btn btn-success btn-sm" title="Go_Back">
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