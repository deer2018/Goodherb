@extends('layouts.volunteer.main')

@section('content')
<div class="container">


    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามประเมินการใช้ยา</div>
            <div class="card-body">

                <!--แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้ -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="{{ url('/Q3') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include ('questionnaireone.quest3')


                        <td>
                            <div class="row">
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