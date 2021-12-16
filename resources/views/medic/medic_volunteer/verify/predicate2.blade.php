@extends('layouts.medic.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800">ข้อมูลของ<a class="m-1 font-weight-bold text-primary">
                {{ $users->username }} {{ $users->surname }}</a> ครั้งที่ 2</h1>
            {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
        </div>

        <!-- Content Row -->
        <div class="row">



            <!-- แบบวัดความเครียดของผู้ดูแล  13 ข้อคำถาม-->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">แบบวัดความเครียดของผู้ดูแล</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase ">{{ $_qt_1->group }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;">{{ $_qt_1->total }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @include ('medic.medic_volunteer.quest2.medic_quest2_13', ['formMode' => 'predicate2.blade'])
                    </div>
                </div>
            </div>


            <!--แบบประเมินความเครียด 5 ข้อคำถาม -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">แบบประเมินความเครียด</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase ">{{ $_qt_2->group }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;">{{ $_qt_2->total }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @include ('medic.medic_volunteer.quest2.medic_quest2_5', ['formMode' => 'predicate2.blade'])
                    </div>
                </div>
            </div>


            <!-- เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลกชุดย่อ จำนวน 26 ข้อคำถาม -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h6 font-weight-bold text-gray-800">เครื่องชี้วัดคุณภาพชีวิต</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase ">{{ $_qt_3->group }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;">{{ $_qt_3->total }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @include ('medic.medic_volunteer.quest2.medic_quest2_26', ['formMode' => 'predicate1.blade'])
                    </div>
                </div>
            </div>


        </div>


        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card position-relative shadow h-100 border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">คำแนะนำของแพทย์</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST"  action="{{ url('/predicate2/' . $users->id) }}"
                            accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('advice') ? 'has-error' : '' }}">
                                <label for="advice" class="control-label">{{ 'รายละเอียด' }}</label>
                                <input class="form-control d-none" name="user_id" type="integer" id="user_id" value=" {{ $users->id }}">
                                <textarea class="form-control" name="advice2" type="text" id="advice2"
                                    placeholder="ใส่ความคิดเห็นของแพทย์"
                                    value="{{ isset($diagnosis2->advice2) ? $diagnosis2->advice2 : '' }}"><?php if (empty($advice2['advice2'])) {
                                            echo '';
                                        } else {
                                            echo $advice2['advice2'];} ?></textarea>
                                        
                            </div><br>

                            <button type="submit" name="advice_form" class="btn btn-primary btn-user btn-block"> บันทึก
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
