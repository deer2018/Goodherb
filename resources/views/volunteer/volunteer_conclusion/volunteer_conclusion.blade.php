@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('volunteer.volunteer_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ผลการรักษา</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>ชื่อ - สกุล</th>
                                        <th>วีรพล พรมราช</th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>ประเภท</td>
                                        <td>1</td>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <td>ผลวินิจฉัย</td>
                                        <td>อยู่ในเกณฑ์ปลอดภัย</td>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <td>รับยา</td>
                                        <td>น้ำดอกไม้ M 78</td>
                                    </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
