@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"> <a href="{{ url('/predicate1/1') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a></div>
                    <div class="card-body">
                        <a href="{{ url('/medicine/medicine_create') }}" class="btn btn-success btn-sm" title="Add New Crud">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูล
                        </a>

                   
                            <div class="form-inline my-2 my-lg-0 float-right">ปริมาณทั้งหมด :
                                
                            </div>
                        

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ดอกไม้</th>
                                        <th>จำนวน/หยด</th>
                                                    
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($medicines as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>                                 
                                        <td>{{ $item->medicine }}</td>
                                        <td>{{ $item->quantity }}</td>                                                                               
                                        <td>
                                            <a href="{{ url('/medicine/' . $item->id . '/medicine_edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>

                                            <form method="POST" action="{{ url('/medicine' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $medicines->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
