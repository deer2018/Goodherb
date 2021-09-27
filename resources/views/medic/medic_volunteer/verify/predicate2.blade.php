@extends('layouts.medic.main')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
                        <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h4 mb-0 text-gray-800">ข้อมูลของ<a class="m-1 font-weight-bold text-primary"> {{ $users->username }}</a> ครั้งที่ 2</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

            <!-- Content Row -->
            <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                           <h6>แบบสอบถามคัดเลือก</h6></div>                
                                        <div class="h6 mb-1 font-weight-bold text-gray-800">เครียดมากที่สุด </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                     @include ('medic.medic_volunteer.quest1.medic_quest1_select', ['formMode' => 'predicate1.blade']) 
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <h6>แบบวัดความเครียดของผู้ดูแล</h6></div>
                                        <div class="m6 mb-1 font-weight-bold text-gray-800">ระดับต่ำ </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                @include ('medic.medic_volunteer.quest1.medic_quest1_13', ['formMode' => 'predicate1.blade'])
                            </div>
                        </div>
                    </div>

                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>แบบประเมินความเครียด</h6></div>
                                        <div class="m6 mb-1 font-weight-bold text-gray-800">เครียดมากที่สุด</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        <h6>เครื่องชี้วัดคุณภาพชีวิต</h6></div>
                                        <div class="m6 mb-1 font-weight-bold text-gray-800">การมีคุณภาพชีวิตที่ไม่ดี</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                @include ('medic.medic_volunteer.quest1.medic_quest1_26', ['formMode' => 'predicate1.blade']) 
                            </div>
                        </div>
                    </div>
            </div>

             <!-- Content Row -->
             <div class="row">

                    <!-- แสดงข้อมูล ภาวะอารมณ์ -->
                    <div class="col-lg-12">

                        <div class="card position-relative shadow h-100  border-bottom-dark">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">การรับประทานยา</h6>
                            </div>
                            <div class="card-body">
                               
                                <div class="mb-3">
                                @include ('questionnaireone.quest3', ['formMode' => 'quest2_check_medicine.blade'])
                                </div>
                            </div>
                        </div>
                    </div>


            </div><br>

                <!-- Content Row -->
            <div class="row">

                    <div class="col-lg-12">

                        <div class="card position-relative shadow h-100 border-bottom-dark">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">คำแนะนำของแพทย์</h6>
                            </div>
                            <div class="card-body">
                            <form>
                                
                            <div class="mb-0"><label for="exampleFormControlTextarea1">รายละเอียด</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></div><br>
                                <button type="submit" class="btn btn-primary btn-user btn-block"> บันทึก </button>       
                            </form> 
                            </div>
                        </div>
                    </div>
            </div>

    </div>
</br>
@endsection