@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('medic.medic_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ข้อมูลอาสาสมัคร</div>
                    <div class="card-body">
        <table class="table table-striped">
          <thead>
            <tr>
        			<th>#</th>
              <th>ชื่อสกุล</th>
              <th>สถานะการอนุมัติ</th>
              <th>ตรวจสอบและวินิจฉัย+จ่ายยา</th>
        		</tr>
          </thead>
        	<tbody>
            <tr>
        			<td>1</td>
        			<td>นายกิตติพันธุ์ ศรีแจ้ง</td>
        			<td>อนุมัติแล้ว</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>2</td>
        			<td>นางสาวจาระวี มันตะรักษ์</td>
        			<td>อนุมัติแล้ว</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr >
        			<td>3 </td>
        			<td>นายณัฐพัชร์ แก้ววงศ์พรวน </td>
                    <td>อนุมัติแล้ว</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>4</td>
        			<td>นายนวพงษ์ มังกะลัง</td>
        			<td>อนุมัติแล้ว</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>5 </td>
              <td>นางสาวปิยารมณ์ รักเมือง</td>
        			<td>อนุมัติแล้ว</td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            <tr>
        			<td>6 </td>
        			<td>นายวีรพล พรมราช</td>
        			<td>อนุมัติแล้ว </td>
        			<td><a href="#">คลิก</a></td>
        		</tr>
            
        	</tbody>
        </table>
        </div></div></div></div>
</div>
</div>
@endsection
