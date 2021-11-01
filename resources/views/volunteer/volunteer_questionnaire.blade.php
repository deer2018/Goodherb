@extends('layouts.volunteer.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">แบบสอบถาม</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>แบบสอบถาม</th>
                                    <th>แบบสอบถาม</th>
                                    <th>วันที่บันทึก</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 1</td>

                                    @if(!empty( $update_1))
                                        <td><a href="{{ url('/Q1') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a></td>
                                    @else
                                        <td><a href="{{ url('/Q1') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>คลิก</button></a></td>
                                    @endif
                                    <td><a class="m-1 font-weight-bold text-primary">{{ $update_1 }}</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>แบบประเมินการใช้ยาครั้งที่ 1</td>
                                    
                                    @if(!empty( $update_3))
                                        <td><a href="{{ url('/Q3') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a></td>
                                    @else
                                        <td><a href="{{ url('/Q3') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>คลิก</button></a></td>
                                    @endif
                                    <td><a class="m-1 font-weight-bold text-primary">{{ $update_3 }}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 2</td>

                                    @if(!empty( $update_2))
                                        <td><a href="{{ url('/Q2') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a></td>
                                    @else
                                        <td><a href="{{ url('/Q2') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>คลิก</button></a></td>
                                    @endif
                                    <td><a class="m-1 font-weight-bold text-primary">{{ $update_2 }}</td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>แบบประเมินการใช้ยาครั้งที่ 2</td>

                                    @if(!empty( $update_4))
                                        <td><a href="{{ url('/Q3-2') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a></td>
                                    @else
                                        <td><a href="{{ url('/Q3-2') }}" title="Back"><button class="btn btn-primary btn-sm" ></i>คลิก</button></a></td>
                                    @endif
                                    <td><a class="m-1 font-weight-bold text-primary">{{ $update_4 }}</td>

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