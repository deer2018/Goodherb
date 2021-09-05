@extends('layouts.medic.main')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Info {{ $users->username }}</div>
                    <div class="card-body">

                        <a href="{{ url('/medic_volunteer') }}" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                      
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                   
                                    <tr><th>ชื่อ</th><td> {{ $users->username }} </td></tr>
                                    <tr><th>นามสกุล</th><td> {{ $users->surname }} </td></tr>
                                    <tr><th>เพศ</th><td> {{ $users->sex }} </td></tr>
                                    <tr><th>อายุ</th><td> {{ $users->age }} </td></tr>
                                    <tr><th>เบอร์-มือถือ</th><td> {{ $users->phone }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
