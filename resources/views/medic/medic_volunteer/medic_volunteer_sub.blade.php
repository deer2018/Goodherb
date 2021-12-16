@extends('layouts.medic.main')

@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-1 font-weight-bold ">แบบสอบถามของ <a
                        class="m-1 font-weight-bold text-primary">{{ $users->username }}</a> </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>แบบสอบถาม</th>
                                <th>การประเมิน</th>
                                <th>แบบประเมินการรับประทานยา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>แบบสอบถามครั้งที่ 1</td>
                                <td>
                                    <a href="{{ url('/predicate1/' . $users->id) }}" title="Click"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>ประเมินครั้งที่ 1</button></a>
                                </td>
                                @if(!empty($update_3))
                                    <td><a href="{{ url('/check_m1/' . $users->id) }}" title="Click"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>การรับประทานยาครั้งที่ 1</button></a></td>
                                @else
                                    <td><a href="{{ url('/check_m1/' . $users->id) }}" title="Click"><button class="btn btn-info btn-sm" disabled><i class="fa fa-pencil-square-o" aria-hidden="true"></i>การรับประทานยาครั้งที่ 1</button></a></td>
                                @endif 
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>แบบสอบถามครั้งที่ 2</td>
                                @if(!empty($update_1))
                                    <td><a href="{{ url('/predicate2/' . $users->id) }}" title="Back"><button
                                            class="btn btn-primary btn-sm" ><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>ประเมินครั้งที่ 2</button></a></td>
                                @else
                                    <td><a href="{{ url('/predicate2/' . $users->id) }}" title="Back"><button
                                    class="btn btn-primary btn-sm" disabled><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i>ประเมินครั้งที่ 2</button></a></td>
                                @endif  

                                @if(!empty($update_4))
                                <td><a href="{{ url('/check_m2/' . $users->id) }}" title="Click"><button
                                            class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>การรับประทานยาครั้งที่ 2</button></a></td>
                                @else
                                <td><a href="{{ url('/check_m2/' . $users->id) }}" title="Click"><button
                                    class="btn btn-info btn-sm" disabled><i class="fa fa-pencil-square-o"
                                        aria-hidden="true"></i>การรับประทานยาครั้งที่ 2</button></a></td>
                                @endif

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
