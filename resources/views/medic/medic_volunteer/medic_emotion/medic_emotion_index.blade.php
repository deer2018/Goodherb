@extends('layouts.medic_nsb.main')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"> <a href="{{ url('/predicate1/1') }}" title="ย้อนกลับ"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a></div>
                    <div class="card-body">
                    
                    <form method="POST" action="{{ url('/medic_emotion/') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include ('questionnaireone.quest_medic', ['formMode' => 'medic_emotion.blade'])

                        <td>
                            <div class="row">
                                <div class="col" style="text-align: right">

                                    <input class="btn btn-primary" type="submit" value="บันทึก">

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
