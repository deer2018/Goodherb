@extends('layouts.medic.main')

@section('content')
    <div class="container">
        <div class="row">
          
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ข้อมูลของ {{ $users->name }}</div>
                    <div class="card-body">
                        <a href="{{ url('/medic_volunteer') }}" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                       </br><br>
                            {{-- <div class="col-md-4 ">
                                <img alt="" style="width:600px;" title=""  class="img-circle img-thumbnail isTooltip rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario">
                            </div>   --}}
                            
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>เลขลำดับอาสาสมัคร</th><td>1</td></tr>
                                    <tr><th>ชื่อ</th><td> {{ $users->username }} </td></tr>
                                    <tr><th>นามสกุล</th><td> {{ $users->surname }} </td></tr>
                                    <tr><th>เบอร์-มือถือ</th><td> {{ $users->phone }} </td></tr>
                                    <tr><th>อายุ</th><td> {{ $users->age }} </td></tr>
                                    <tr><th>เพศ</th><td> {{ $users->sex }} </td></tr>
                                    <tr><th>ที่อยู่</th><td> {{ $users->address }} </td></tr>
                                    <tr><th>สถานภาพสมรส</th><td> {{ $users->relationship }} </td></tr>
                                    <tr><th>อาชีพ</th><td> {{ $users->occupation }} </td></tr>
                                    <tr><th>รายได้ต่อเดือน</th><td> {{ $users->income }} </td></tr>
                                    <tr><th>ระดับการศึกษา</th><td> {{ $users->education }} </td></tr>
                                    <tr><th>ศาสนา</th><td> {{ $users->religion }} </td></tr>
                                    <tr><th>เชื้อชาติ</th><td> {{ $users->race }} </td></tr>
                                    <tr><th>ความเกี่ยวข้องกับผู้ป่วยที่ดูแล</th><td> {{ $users->relevance }} </td></tr>                                   
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</br>
@endsection
