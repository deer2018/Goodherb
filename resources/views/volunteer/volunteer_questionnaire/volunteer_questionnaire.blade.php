@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('volunteer.volunteer_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถาม</div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>1</th>
                                        <th>ชื่อแบบสอบถามที่ 1</th>
                                        <th>8-8-64</th>
                                        <th><a href="#">คลิก</a></th>
                                        <th></th>
                                    </tr>
                            </thead>
                            <thead>
                                    <tr>
                                        <th>2</th>
                                        <th>ชื่อแบบสอบถามที่ 2</th>
                                        <th>22-8-64</th>
                                        <th><a href="#">คลิก</a></th>
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
