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
                                        <th>ลำดับ</th>
                                        <th>แบบสอบถาม</th>
                                        <th>วันที่</th>          
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบสอบถามครั้งที่ 1</td>
                                        <td>1-8-64</td>
                                        <td><a href="{{ url('/volunteer_questionnaire_sub') }}" title="Back">คลิก</a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>แบบสอบถามครั้งที่ 2</td>
                                        <td>14-8-64</td>
                                        <td><a href="{{ url('/volunteer_questionnaire_sub') }}" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                     
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
