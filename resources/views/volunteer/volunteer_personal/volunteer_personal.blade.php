@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('volunteer.volunteer_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ประวัติส่วนตัว</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">   
                            <tbody>
                                    <tr>
                                        <th>ชื่อ - สกุล</th>
                                        <th>วีรพล พรมราช</th>
                            
                                        <th></th>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <th>เลขประจำตัวประชาชน</th>
                                        <th>1419901803971</th>
                            
                                        <th></th>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <th>วัน/เดือน/ปีเกิด</th>
                                        <th>23 ต.ค. 2541</th>
                            
                                        <th></th>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <th>ที่อยู่</th>
                                        <th>39/98 ม.6 ต.หัวรอ อ.พระนครศรีอยุธยา จ.พระนครศรีอยุธยา</th>
                            
                                        <th></th>
                                    </tr>
                            </tbody>
                            <tbody>
                                    <tr>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>096-8758190</th>
                            
                                        <th></th>
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
