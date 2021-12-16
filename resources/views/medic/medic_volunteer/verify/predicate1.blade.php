@extends('layouts.medic.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800">ข้อมูลของ<a class="m-1 font-weight-bold text-primary">
                    {{ $users->username }} {{ $users->surname }}</a> ครั้งที่ 1</h1>

            {{-- หน้ารีพอร์ท --}}
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">


            <!-- แบบวัดความเครียดของผู้ดูแล  13 ข้อคำถาม-->
            <div class="col-xl-3 col-md-6 mb-4">
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
                        @include ('medic.medic_volunteer.quest1.medic_quest1_13', ['formMode' => 'predicate1.blade'])
                    </div>
                </div>
            </div>

            <!--แบบประเมินความเครียด 5 ข้อคำถาม -->
            <div class="col-xl-3 col-md-6 mb-4">
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
                        @include ('medic.medic_volunteer.quest1.medic_quest1_5', ['formMode' => 'predicate1.blade'])
                    </div>
                </div>
            </div>


            <!-- เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลกชุดย่อ จำนวน 26 ข้อคำถาม -->
            <div class="col-xl-3 col-md-6 mb-4">
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
                        @include ('medic.medic_volunteer.quest1.medic_quest1_26', ['formMode' => 'predicate1.blade'])
                    </div>
                </div>
            </div>


            <!-- แบบสอบถามคัดเลือก -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-gray-800 h6 font-weight-bold">
                                    แบบสอบถามคัดเลือก</div>
                                <div class="h5 mb-1 font-weight-bold text-primary text-uppercase">{{ $_qt_4->group }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <p style="font-size:35px; color:#e74a3b;">{{ $_qt_4->total }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        @include ('medic.medic_volunteer.quest1.medic_quest1_select', ['formMode' => 'predicate1.blade'])
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->



        <!-- แสดงข้อมูล ภาวะอารมณ์ -->
        <div class="col-lg-12">

            <div class="card position-relative shadow h-100  border-bottom-success">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">
                        ขั้นตอนการวิเคราะห์เพื่อให้ได้ตัวยาที่คล้ายกับอาการที่ผู้ป่วยเป็น</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto text-gray-800 h6 font-weight-bold">ภาวะอารมณ์ :</div>
                        <div class="col-auto text-dark h6 font-weight-bold">
                            @if (!isset($emotion)) {
                                กรุณาเลือกภาวะอารมณ์
                            @else
                                {{ $emotion->id }}. {{ $emotion->emotion_name }}
                            @endif
                        </div>
                    </div><br>
                    <div class="mb-2">
                        {{-- <a href="{{ url('/medic_emotion') }}" title="View Crud"><button class="btn btn-success  btn-block"><i
                                        class="" aria-hidden="true"></i>เลือกภาวะอารมณ์</button></a> --}}
                        <div> @include ('medic.medic_volunteer.verify.quest1_medic', ['formMode' => 'quest1_medic.blade'])
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <br>
        <!-- แสดงข้อมูล ดอกไม้ -->
        <div class="col-lg-12">

        
        <?php $total = 0 ?>
        
            <div class="card position-relative shadow h-100 border-bottom-info">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">ขั้นตอนการเลือกชนิดของยาจากดอกไม้</h6>
                </div>
               
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col-auto text-gray-800 h6 font-weight-bold">ตัวยา</div> --}}
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ดอกไม้</th>
                                        <th>จำนวน/หยด</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach ($medicines as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->medicine }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('/predicate1/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" name="medicine_delete"
                                                        class="btn btn-danger btn-sm" title="Delete Crud"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php $total += $item->quantity ?>
                                    @endforeach


                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $medicines->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div><br>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">จำนวนทั้งหมด : <a style="color: #4e73df" >{{$total}}</a> หยด</h6>
                    </div><br>
                    <div class="mb-2">
                        {{-- <a href="{{ url('/medicine') }}" title="View Crud"><button class="btn btn-info  btn-block"><i class="btn-block" aria-hidden="true"></i>เลือกยาจากดอกไม้</button></a> --}}
                        @include ('medic.medic_volunteer.verify.quest1_medicine', ['formMode' => 'quest1_medicine.blade'])
                    </div>
                </div>
            </div>
        </div>

        <br>



        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card position-relative shadow h-100 border-bottom-primary">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">คำแนะนำของแพทย์</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" id="advice_form" action="{{ url('/predicate1/' . $users->id) }}"
                            accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('POST') }}
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('advice') ? 'has-error' : '' }}">
                                <label for="advice" class="control-label">{{ 'รายละเอียด' }}</label>
                                <input class="form-control d-none" name="user_id" type="integer" id="user_id"
                                    value=" {{ $users->id }}">
                                <textarea class="form-control" name="advice" type="text" id="advice"
                                    placeholder="ใส่ความคิดเห็นของแพทย์"
                                    value="{{ isset($diagnosis->advice) ? $diagnosis->advice : '' }}"><?php if (empty($advice['advice'])) {
                                            echo '';
                                        } else {
                                            echo $advice['advice'];
                                        } ?></textarea>
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
