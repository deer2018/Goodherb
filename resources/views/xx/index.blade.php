@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Crud</div>
                    <div class="card-body">
                        <a href="{{ url('/crud/create') }}" class="btn btn-success btn-sm" title="Add New Crud">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                        </a>

                        <form method="GET" action="{{ url('/crud') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ</th>
                                        <th>นามสกุล</th>
                                        <th>เพศ</th>
                                        <th>อายุ</th>
                                        <th>สถานะ</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($crud as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->content }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td>{{ $item->user_id }}</td>
                                        <th> ยังไม่ได้ตรวจ </th>
                                        <td>
                                            <a href="{{ url('/crud/' . $item->id) }}" title="View Crud"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>รายละเอียด</button></a>
                                            <a href="{{ url('/crud/' . $item->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>

                                            <form method="POST" action="{{ url('/crud' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
                                            </form>
                                            <a href="{{ url('/xx') }}" ><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ตรวจสอบ</button></a>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $crud->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
