@extends('layouts.volunteer.main')

@section('content')

<!-- <div class="col-md-10"> -->
<div class="card">
    <div class="card-header">แบบสอบถาม</div>
    <div class="card-body">

        <!-- หัวข้อที่ 1 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 1</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_1))
            <a class="m-1 font-weight-bold text-primary">{{ $update_1 }}
                <a href="{{ url('/Q1') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Q1') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 2 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">แบบประเมินการใช้ยาครั้งที่ 1</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_3))
            <a class="m-1 font-weight-bold text-primary">{{ $update_3 }}
                <a href="{{ url('/Q3') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Q3') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 3 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">แบบสอบถามวัดความเครียดของผู้ดูแลครั้งที่ 2</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_2))
            <a class="m-1 font-weight-bold text-primary">{{ $update_2 }}
                <a href="{{ url('/Q2') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Q2') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

        <!-- หัวข้อที่ 4 -->
        <div class="container px-0">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-2 border bg-light">แบบประเมินการใช้ยาครั้งที่ 2</div>
                </div>
            </div>
            <br>
            @if(!empty( $update_4))
            <a class="m-1 font-weight-bold text-primary">{{ $update_4 }}
                <a href="{{ url('/Q3-2') }}" title="Back"><button class="btn btn-primary btn-sm" disabled></i>คลิก</button></a>
                @else
                <a href="{{ url('/Q3-2') }}" title="Back"><button class="btn btn-primary btn-sm"></i>คลิก</button></a>
                @endif
        </div>
        <br>

    </div>
</div>
@endsection