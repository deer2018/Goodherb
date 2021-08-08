@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('volunteer.volunteer_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ข้อมูลอาสาสมัคร</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th>กลุ่มอสม</th>
                                        <th></th>
                                    </tr>
                            </thead>
                        </table>
                        </div>
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
