@extends('layouts.volunteer.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ผลการรักษา</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-user-information">
                            <thead>
                                <tr>
                                    <td>ชื่อ - สกุล</td>
                                    <td><a class="m-1 font-weight-bold text-primary">{{ $users->username }}</a><a class="m-1 font-weight-bold text-primary">{{ $users->surname }}</a></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ประเภท</td>
                                    <td><a class="m-1 font-weight-bold text-primary">{{ isset($me->emotion) ? $qt->group : "" }}</a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>ผลวินิจฉัย</td>
                                    <td><a class="m-1 font-weight-bold text-primary">{{ isset($me->emotion) ? $me->emotion : "" }}</a></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>รับยา</td>
                                    <td><a class="m-1 font-weight-bold text-primary">{{isset($md->medicine) ?  $md->medicine : "" }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection