@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถามวัดความเครียดของผู้ดูแล</div>
                    <div class="card-body">

                <!--แบบสอบถามวัดความเครียดของผู้ดูแล 13 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    @include ('questionnaire.quest13', ['formMode' => 'volunteer_questionnaire_sub1'])
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="{{ url('/volunteer_questionnaire') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
                <div class="col" style="text-align: right">
                <a href="{{ url('/volunteer_questionnaire_sub2') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                </div>
                </div>
                </td>

</div>
</div>
</div>
</div>
@endsection