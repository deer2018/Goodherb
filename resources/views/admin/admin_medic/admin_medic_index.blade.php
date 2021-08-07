@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('admin.admin_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ข้อมูลแพทย์</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>เบอร์โทรศัพท์</th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>นายก</td>
                                        <td>จันทร์กระจ่าง</td>
                                        <td>081-1231212</td>
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
