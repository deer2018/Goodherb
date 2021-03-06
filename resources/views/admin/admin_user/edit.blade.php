@extends('layouts.admin.main')

@section('content')
  

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">แก้ไข {{ $users->name }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin_user') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin_user/' . $users->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.admin_user.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
      
@endsection
