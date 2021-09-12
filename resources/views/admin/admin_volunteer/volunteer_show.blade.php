@extends('layouts.admin.main')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Info {{ $users->name }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin_volunteer/') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr><th>ลำดับ</th><td>{{ $users->id }}</td></tr>
                                    <tr><th>ชื่อ</th><td> {{ $users->name }} </td></tr>
                                    <tr><th>นามสกุล</th><td> {{ $users->email }} </td></tr>
                                    <tr><th>เพศ</th><td> {{ $users->role }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
