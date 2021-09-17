@extends('layouts.admin.main')

@section('content')
<div class="container-fluid">
  <div class="card shadow mb-4">
  <div class="card-header py-3"><h6 class="m-1 font-weight-bold text-primary">ข้อมูลหมอ</h6></div>
    <div class="card-body">
      

<!-- จำกัดหน้าแสดงข้อมูล -->
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                  
                        <!-- ค้นหา -->
                        <div class="col-sm-12 col-md-11">
                          <form method="GET" action="{{ url('/admin_volunteer_index') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                              <div class="input-group">
                                  <input type="text" class="form-control form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                  <span class="input-group-append">
                                      <button class="btn btn-primary" type="submit">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </span>
                              </div>
                          </form>
                        </div>
                  </div></br>

                  <div class="table-responsive-sm">       
                          <table class="table dataTable">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>ชื่อในเว็บ</th>
                                <th>อีเมล</th>
                                <th>สถานะ</th>
                                <th></th>
                              </tr>
                            </thead>
                            @foreach($users as $item)
                            <tbody>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $item->name  }}</td>
                                <td> {{ $item->email  }}</td>
                                <td> {{ $item->role  }}</td>
                                <td><a href="#" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>ประวัติส่วนตัว</button></a>
                                <a href="#" title="Edit"><button class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แบบสอบถาม</button></a>
                             
                                </td>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
            </div>
    </div>
  </div>  
</div>
@endsection
