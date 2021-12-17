<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Goodherb</title>
{{-- 
    <style>
         @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: local('Quattrocento Sans Bold'), local('QuattrocentoSans-Bold'),url("{{ asset('http://164.115.33.174/awards_opdc/assets/fonts/THSarabunNew/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: local('Quattrocento Sans Bold'), local('QuattrocentoSans-Bold'), url("{{ asset('http://164.115.33.174/awards_opdc/assets/fonts/THSarabunNew/THSarabunNewBold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: local('Quattrocento Sans Bold'), local('QuattrocentoSans-Bold'), url("{{ asset('http://164.115.33.174/awards_opdc/assets/fonts/THSarabunNew/THSarabunNewBoldItalic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: local('Quattrocento Sans Bold'), local('QuattrocentoSans-Bold'), url("{{ asset('http://164.115.33.174/awards_opdc/assets/fonts/THSarabunNew/THSarabunNewItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: 'THSarabunNew';
        }
    </style> --}}

</head>

<body>
    <header>
        <div style='text-align: center;'>
            <img src="img/logo.png" wclassth="100px" height="70px">
        </div>
        <div class="col-md-6">
            <h5 class="name">เว็บไซต์เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้ตามสูตรของบาคของผู้ดูแลผู้สูงอายุที่มีภาวะพึ่งพิง
            </h5>
        </div>
    </header>
    <main>
        <div class="clearfix">
            <div class="client">
                <div class="name">รหัสอาสาสมัคร : <a>{{ $users->id }}</a></div>
                <div class="name">ชื่อ-นามสกุล : <a>{{ $users->username }} {{ $users->surname }}</a></div>
                <div class="name">อายุ : <a>{{ $users->age }}</a></div>
                <div class="name">เพศ : <a>{{ $users->sex }}</a></div>
                <div class="name">อีเมล : <a>{{ $users->email }}</a></div>
                <div class="name">เบอร์โทรศัพท์ : <a>{{ $users->phone }}</a></div>
            </div>
            <div style="float: right; margin-right: 30%; line-height: 20pt;">
                <div class="name">ศาสนา : <a>{{ $users->religion }}</a></div>
                <div class="name">เชื้อชาติ : <a>{{ $users->age }}</a></div>
                <div class="name">สถานภาพสมรส : <a>{{ $users->relationship }}</a></div>
                <div class="name">อาชีพ : <a>{{ $users->occupation }}</a></div>
                <div class="name">รายได้ต่อเดือน : <a>{{ $users->income }}</a></div>
                <div class="name">ระดับการศึกษา : <a>{{ $users->education }}</a></div>
            </div>
        </div>
        <div class="clearfix">
            <div class="client">
                <div class="name">ที่อยู่ : <a>{{ $users->address }}</a></div>
                <div class="name">ความเกี่ยวข้องกับผู้ป่วย : <a>{{ $users->relevance }}</a></div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div class="client">
                <div class="name">กลุ่มอาสาสมัคร :<a>{{ $_qt_4->group }}</a></div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div class="client">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>แบบประเมินครั้งที่ 1 </div>
                <div class="name">แบบวัดความเครียดของผู้ดูแล 13 ข้อ : &nbsp;<a>{{ $_qt_1->total }}</a>
                    คะแนน</div>
                <div class="name">แบบประเมินความเครียด 5 ข้อ : &nbsp;<a>{{ $_qt_2->total }}</a> คะแนน</div>
                <div class="name">เครื่องชี้วัดคุณภาพชีวิต 26 ข้อ : &nbsp;<a>{{ $_qt_3->total }}</a> คะแนน
                </div>
            </div>
            <div style="float: right; margin-right: 30%; line-height: 20pt;">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>เกณฑ์</div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_1->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_2->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_3->group }}</a> </div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div class="client">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>แบบประเมินครั้งที่ 2 </div>
                <div class="name">แบบวัดความเครียดของผู้ดูแล 13 ข้อ : &nbsp;<a>{{ $_qt2_1->total }}</a>
                    คะแนน</div>
                <div class="name">แบบประเมินความเครียด 5 ข้อ : &nbsp;<a>{{ $_qt2_2->total }}</a> คะแนน
                </div>
                <div class="name">เครื่องชี้วัดคุณภาพชีวิต 26 ข้อ : &nbsp;<a>{{ $_qt2_3->total }}</a> คะแนน
                </div>
            </div>
            <div style="float: right; margin-right: 30%; line-height: 20pt;">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>เกณฑ์</div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_1->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_2->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_3->group }}</a> </div>
            </div>
        </div>
        <hr>
      

    </main>
    <footer>

    </footer>
</body>

</html>
