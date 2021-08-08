@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('medic.medic_sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">ประวัติแพทย์ {{ $medic_crud->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/medic_crud') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                        <a href="{{ url('/medic_crud/' . $medic_crud->id . '/edit') }}" title="Edit medic_Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="{{ url('medic_crud' . '/' . $medic_crud->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete medic_Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบข้อมูล</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                    <th>ลำดับ</th><td>{{ $medic_crud->id }}</td></tr>
                                    <tr><th> ชื่อ</th><td> {{ $medic_crud->title }} </td></tr>
                                    <tr><th> นามสกุล </th><td> {{ $medic_crud->content }} </td></tr>
                                    <tr><th> เพศ </th><td> {{ $medic_crud->category }} </td></tr>
                                    <tr><th> อายุ </th><td> {{ $medic_crud->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
