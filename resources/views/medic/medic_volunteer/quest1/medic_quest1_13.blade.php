@extends('layouts.medic.main')

@section('content')
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามวัดความเครียดของผู้ดูแล</div>
            <div class="card-body">

                <!--แบบสอบถามวัดความเครียดของผู้ดูแล 13 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="GET" action="{{ url('/medic_quest1_5') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include ('questionnaireone.quest13', ['formMode' => 'medic_quest1_13.blade'])

                        <td>
                            <div class="row">
                                <div class="col" style="text-align: left">
                                    <a href="{{ url('/medic_quest1_select') }}" class="btn btn-success btn-sm">
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
</div>
@endsection