@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบประเมินความเครียด</div>
                    <div class="card-body">

                <!--แบบประเมินความเครียด 5 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                <form method="POST" action="{{ url('/_q1') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    @include ('questionnaireone.quest5', ['formMode' => 'volunteer_questionnaire_sub2'])
                </div>

                <td>
		        <div class="row">
	            <div class="col" style="text-align: left">
                <a href="{{ url('/Q1') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
                <div class="col" style="text-align: right">
                <a href="{{ url('/Q1-3') }}" class="btn btn-success btn-sm" title="Go_Back">
                      <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                </div>
                </div>
                </td>

</div>
</div>
</div>
</div>
@endsection