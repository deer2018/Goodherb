@extends('layouts.app')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถามวัดความเครียดของผู้ดูแล</div>
                    <div class="card-body">

                <!--แบบสอบถามวัดความเครียดของผู้ดูแล 13 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                <form method="POST" action="{{ url('/Q1') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                    @include ('questionnaireone.quest13')

                    <td>
		        <div class="row">
                    <div class="col" style="text-align: left">
                        <a href="{{ url('/volunteer_questionnaire') }}" class="btn btn-success btn-sm" >
                            <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a>
                    </div>
                    <div class="col" style="text-align: right">
                        <a href="{{ url('/Q1-2') }}" class="btn btn-success btn-sm"  type="submit">
                            <i class="fa fa-plus" aria-hidden="true"></i>ถัดไป</a></a>
                    </div>
                </div>
                </td>
                </form>
                </div>

                

</div>
</div>
</div>
</div>
@endsection