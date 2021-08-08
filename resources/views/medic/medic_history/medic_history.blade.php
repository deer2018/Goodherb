@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('medic.medic_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">หน้าข้อมูลของหมอ</div>
                    <div class="card-body">
        <p><h4>แพทย์หญิง Scarlett Johansson</h4>
        <hr>
        <b>ความเชี่ยวชาญ</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ปัญหาด้านความเครียด<hr>
        <b>ความชำนาญเฉพาะทาง</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความเครียดวิทยา<hr>
        <b>ภาษาที่พูด</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ไทย / อังกฤษ<hr>
        <b>คุณวุฒิ</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- แพทย์ศาสตรบัณฑิต, คณะแพทยศาสตร์, มหาวิทยาลัยสงขลานครินทร์, ประเทศไทย
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- แพทย์เฉพาะทางสาขาความเครียดทั่วไป, ราชวิทยาลัยศัลยแพทย์แห่งประเทศไทย
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- แพทย์ปฎิบัติการ (Fellowship), แผนกความเครียดวิทยา, ศูนย์การแพทย์โรงพยาบาลกรุงเทพ, ประเทศไทย<hr>
        <b>วุฒิบัตร</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาขาความเครียดทั่วไป, ประเทศไทย<hr>
        <b>ความชำนาญพิเศษ</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ช่วยกำจัดความเครียดให้ The Hulk<hr>
        <b>การศึกษาอื่นๆ และประสบการณ์การทำงาน</b>
        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ภาควิชาความเครียดศาสตร์ มหาวิทยาลัยสงขลานครินทร์ ตำแหน่ง อาจารย์แพทย์, ประเทศไทย<hr>
        </p>

        </div></div></div></div>
</div>
</div>
@endsection