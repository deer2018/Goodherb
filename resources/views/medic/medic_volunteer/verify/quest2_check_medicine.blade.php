@extends('layouts.medic.main')

@section('content')




    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามประเมินการใช้ยา</div>
            <div class="card-body">

                <!--แบบประเมินความสม่ำเสมอในการได้รับน้ำดอกไม้ -->

                <div>
                    <form method="GET" action="{{ url('/check_m2'. $users->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include ('medic.medic_questionnaire.quest3', ['formMode' => 'quest1_check_medicine'])
                       
                    
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection