<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>แอปพลิเคชัน เก็บข้อมูลในโปรแกรมการลดความเครียดด้วยยารักษาใจจากดอกไม้ตามสูตรของบาคของผู้ดูแล
ผู้สูงอายุที่มีภาวะพึ่งพิง</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #FFCCFF;
                color: #CC0000;
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 90vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 69px;
            }

            .links > a {
                color: #CC0000;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 56;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" font-size>
                <b><i>ความ❀</i></b>
                <br><b><i>☹เครียด</i></b></br>
                
                </div>
                    <br>แอปพลิเคชันเก็บข้อมูลในโปรแกรมการลดความเครียด
                    <br>ด้วยยารักษาใจจากดอกไม้ตามสูตรของบาคของผู้ดูแล
                    <br>ผู้สูงอายุที่มีภาวะพึ่งพิง
                    <br>
                    <br>
                    <br><marquee scrollamount="15" direction="left" >จัดทำโดย นักศึกษาจาก
มหาวิทยาลัยราชภัฏวไลยอลงกรณ์ ในพระบรมราชูปถัมภ์</marquee>
                

             
            </div>
        </div>
    </body>
</html>
