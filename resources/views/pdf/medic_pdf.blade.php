<!DOCTYPE html>
<html lang="en">

<head>

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Goodherb</title>

    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('fonts/THSarabunNew.tff') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
        }

    </style>

</head>

<body>
    <header>
        <div style='text-align: center;'>
            <img src="img/logo.png" width="100px" height="70px">
        </div>
        <div class="col-md-6">
            <h3 class="name">เว็บไซต์
                เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้ตามสูตรของบาคของผู้ดูแลผู้สูงอายุที่มีภาวะพึ่งพิง
            </h3>
        </div>
    </header>
    <main>
        <div class="clearfix">
            <div id="client">
                <div class="name">รหัสอาสาสมัคร : <a>{{ $users->id }}</a></div>
                <div class="name">ชื่อ-นามสกุล : <a>{{ $users->username }} {{ $users->surname }}</a></div>
                <div class="name">อายุ : <a>{{ $users->age }}</a></div>
                <div class="name">เพศ : <a>{{ $users->sex }}</a></div>
                <div class="name">อีเมล : <a>{{ $users->email }}</a></div>
                <div class="name">เบอร์โทรศัพท์ : <a>{{ $users->phone }}</a></div>
            </div>
            <div id="invoice">
                <div class="name">ศาสนา : <a>{{ $users->religion }}</a></div>
                <div class="name">เชื้อชาติ : <a>{{ $users->age }}</a></div>
                <div class="name">สถานภาพสมรส : <a>{{ $users->relationship }}</a></div>
                <div class="name">อาชีพ : <a>{{ $users->occupation }}</a></div>
                <div class="name">รายได้ต่อเดือน : <a>{{ $users->income }}</a></div>
                <div class="name">ระดับการศึกษา : <a>{{ $users->education }}</a></div>
            </div>
        </div>
        <div class="clearfix">
            <div id="client">
                <div class="name">ที่อยู่ : <a>{{ $users->address }}</a></div>
                <div class="name">ความเกี่ยวข้องกับผู้ป่วย : <a>{{ $users->relevance }}</a></div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div id="client">
                <div class="name">กลุ่มอาสาสมัคร : <a>{{ $_qt_4->group }}</a></div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div id="client">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>แบบประเมินครั้งที่ 1 </div>
                <div class="name">แบบวัดความเครียดของผู้ดูแล 13 ข้อ : &nbsp;<a>{{ $_qt_1->total }}</a>
                    คะแนน</div>
                <div class="name">แบบประเมินความเครียด 5 ข้อ : &nbsp;<a>{{ $_qt_2->total }}</a> คะแนน</div>
                <div class="name">เครื่องชี้วัดคุณภาพชีวิต 26 ข้อ : &nbsp;<a>{{ $_qt_3->total }}</a> คะแนน
                </div>
            </div>
            <div style="float: right; margin-right: 40%; line-height: 20pt;">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>0</div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_1->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_2->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt_3->group }}</a> </div>
            </div>
        </div>
        <hr>
        <div class="clearfix">
            <div id="client">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>แบบประเมินครั้งที่ 2 </div>
                <div class="name">แบบวัดความเครียดของผู้ดูแล 13 ข้อ : &nbsp;<a>{{ $_qt2_1->total }}</a>
                    คะแนน</div>
                <div class="name">แบบประเมินความเครียด 5 ข้อ : &nbsp;<a>{{ $_qt2_2->total }}</a> คะแนน
                </div>
                <div class="name">เครื่องชี้วัดคุณภาพชีวิต 26 ข้อ : &nbsp;<a>{{ $_qt2_3->total }}</a> คะแนน
                </div>
            </div>
            <div style="float: right; margin-right: 40%; line-height: 20pt;">
                <div style='color:rgb(9, 9, 99); font-weight:bold;'>0</div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_1->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_2->group }}</a> </div>
                <div class="name">อยู่ในระดับ : <a>{{ $_qt2_3->group }}</a> </div>
            </div>
        </div>
        <hr>
        {{-- <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3>Website Design</h3>Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">$40.00</td>
            <td class="qty">30</td>
            <td class="total">$1,200.00</td>
          </tr>
          <tr>
            <td class="no">02</td>
            <td class="desc"><h3>Website Development</h3>Developing a Content Management System-based Website</td>
            <td class="unit">$40.00</td>
            <td class="qty">80</td>
            <td class="total">$3,200.00</td>
          </tr>
          <tr>
            <td class="no">03</td>
            <td class="desc"><h3>Search Engines Optimization</h3>Optimize the site for search engines (SEO)</td>
            <td class="unit">$40.00</td>
            <td class="qty">20</td>
            <td class="total">$800.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>$5,200.00</td>
          </tr>
        </tfoot>
      </table> --}}


    </main>
    <footer>

    </footer>
</body>

</html>
