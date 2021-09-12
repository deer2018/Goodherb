@extends('layouts.medic.main')

@section('content')
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบคัดเลือกอาสาสมัคร</div>
            <div class="card-body">

                <!--แบบคัดเลือกอาสาสมัคร 10 ข้อคำถาม -->

                
                    <form method="GET" action="{{ url('/medic_quest1_13') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include ('questionnaireone.quest_select', ['formMode' => 'medic_quest1_select.blade'])


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    <a href="{{ url('/medic_volunteer_sub') }}" class="btn btn-success btn-sm" title="Go_Back">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</a>
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
@endsection