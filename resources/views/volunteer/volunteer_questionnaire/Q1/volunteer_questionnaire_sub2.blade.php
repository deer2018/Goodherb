@extends('layouts.volunteer.main')

@section('content')



    <div class="col-md-10">
        <div class="card">
            <div class="card-header">(2/4) แบบประเมินความเครียดอาการหรือความรู้สึกที่เกิดในระยะ 2 - 4 สัปดาห์</div>
            <div class="card-body">

                <!--แบบประเมินความเครียด 5 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="{{ url('/Q1-2') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include ('questionnaireone.quest5', ['formMode' => 'volunteer_questionnaire_sub2'])

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

@endsection