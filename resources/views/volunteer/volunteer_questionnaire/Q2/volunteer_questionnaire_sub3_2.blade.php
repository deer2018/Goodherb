@extends('layouts.volunteer.main')

@section('content')
<div class="container">
<script language="javascript">
    function delaler () {
        if (confirm('กรอกข้อมูลสำเร็จแล้ว')){
            return true;
        }
        else{
            return false;
        }
    }
</script>

    <div class="col-md-10">
        <div class="card">
            <div class="card-header">แบบสอบถามเครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก</div>
            <div class="card-body">

                <!--เครื่องชี้วัดคุณภาพชีวิตขององค์การอนามัยโลก 26 ข้อคำถาม -->

                <div id="13" class="tabcontent">
                    <form method="POST" action="{{ url('/Q2-3') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        @include ('questionnaireone.quest26', ['formMode' => 'volunteer_questionnaire_sub3_2'])


                        <td>
                            <div class="row">
                                <div class="col" style="text-align: right">

                                <input class="btn btn-primary" type="submit" onclick="return delaler();" value="ยืนยัน">

                                </div>
                            </div>
                        </td>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection