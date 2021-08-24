@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('volunteer.volunteer_sidebar')

            <div class="col-md-10">

                <div class="card">
                    <div class="card-header">หน้าหลัก</div>
                    <div class="card-body">




                    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-10 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">

                    <!-- ************************  image  **************** -->

                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <br>
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                            </div> <br>
                            <div style="text-align: center" > 
                                <a href="{{ url('/volunteer/' . $data->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>แก้ไขข้อมูล</button></a>
                            </div>
                        </div>


                        <!-- ******************* content ********************* -->
                        
                        <div class="col">  <br>
                            <div class="card-block">
                                <h4 class="m-b-20 p-b-5 b-b-default f-w-600"> โปรไฟล์</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">ชื่อ - นามสกุล</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">{{ $data->name }}  {{ $data->surname }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">เพศ</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">{{ $data->sex }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">อายุ</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">{{ $data->age }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">email</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">{{ $data->email }}  </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">เบอร์โทร</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="m-b-10 f-w-600">{{ $data->phone }}  </p>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </div></div></div></div>
</div>
</div>
@endsection
