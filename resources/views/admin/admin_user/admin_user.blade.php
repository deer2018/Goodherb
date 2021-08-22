@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
            @include('admin.admin_sidebar')

      <div class="col-md-10">
      <div class="card">
      <div class="card-header">Crud</div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
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
              <td><a href="{{ url('/admin_user/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
            <form method="POST" action="{{ url('/admin_user' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>ลบข้อมูล</button>
            </form>
              </td>
        	</tbody>
		@endforeach
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
