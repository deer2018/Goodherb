@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Crud {{ $crud->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/crud') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>ย้อนกลับ</button></a>
                        <a href="{{ url('/crud/' . $crud->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไขข้อมูล</button></a>

                        <form method="POST" action="{{ url('crud' . '/' . $crud->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบข้อมูล</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ลำดับ</th><td>{{ $crud->id }}</td>
                                    </tr>
                                    <tr><th> ชื่อ</th><td> {{ $crud->title }} </td></tr>
                                    <tr><th> นามสกุล </th><td> {{ $crud->content }} </td></tr>
                                    <tr><th> เพศ </th><td> {{ $crud->category }} </td></tr>
                                    <tr><th> อายุ </th><td> {{ $crud->user_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
