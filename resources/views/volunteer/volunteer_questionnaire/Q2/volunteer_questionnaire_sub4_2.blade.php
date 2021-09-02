@extends('layouts.app')

@section('content')
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบคัดเลือกอาสาสมัคร</div>
            <div class="card-body">

                <!--แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้ -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="{{ url('/Q2-4') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include ('questionnaireone.quest3', ['formMode' => 'volunteer_questionnaire_sub4'])


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    <a href="{{ url('/Q2-3') }}" class="btn btn-success btn-sm" title="Go_Back">
                                        <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a>
                                </div>
                                <div class="col" style="text-align: right">

                                    <input class="btn btn-primary" type="submit" value="ถัดไป">

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