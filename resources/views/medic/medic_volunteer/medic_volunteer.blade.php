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
        			<th>ลำดับ</th>
              <th>ชื่อสกุล</th>
              <th>กลุ่มอาสาสมัคร</th>
			        <th>สถานะ</th>
              <th>ตรวจสอบและวินิจฉัย+จ่ายยา</th>
        		</tr>
          </thead>
        	<tbody>
            <tr>
        			<td>1</td>
        			<td>นายกิตติพันธุ์ ศรีแจ้ง</td>
        			<td>1 ภาวะพึ่งพาโดยสมบูรณ์</td>
				    	<td>ยังไม่ได้ตรวจสอบ</td>
        			<td><a href="{{ url('/medic_volunteer_sub') }}" class="btn btn-info btn-sm" title="Go_go">
                            <i class="fa fa-eye" aria-hidden="true"></i> ตรวจ
                        </a></td>
        		</tr>
            <tr>
        			<td>2</td>
        			<td>นางสาวจาระวี มันตะรักษ์</td>
        			<td>2 ภาวะพึ่งพาโดยสมบูรณ์</td>
		    			<td>ยังไม่ได้ตรวจสอบ</td>
        			<td><a href="{{ url('/medic_volunteer_sub') }}" class="btn btn-info btn-sm" title="Go_go">
                            <i class="fa fa-eye" aria-hidden="true"></i> ตรวจ
                        </a></td>
        		</tr>
            <tr >
        			<td>3 </td>
        			<td>นายณัฐพัชร์ แก้ววงศ์พรวน </td>
              <td>3 ภาวะพึ่งพาปานกลาง</td>
	    				<td>ยังไม่ได้ตรวจสอบ</td>
        			<td><a href="{{ url('/medic_volunteer_sub') }}" class="btn btn-info btn-sm" title="Go_go">
                            <i class="fa fa-eye" aria-hidden="true"></i> ตรวจ
                        </a></td>
        		</tr>
            <tr>
        			<td>4</td>
        			<td>นายนวพงษ์ มังกะลัง</td>
        			<td>4 ไม่เป็นภาระพึ่งพา</td>
			    		<td>ยังไม่ได้ตรวจสอบ</td>
        			<td><a href="{{ url('/medic_volunteer_sub') }}" class="btn btn-info btn-sm" title="Go_go">
                            <i class="fa fa-eye" aria-hidden="true"></i> ตรวจ
                        </a></td>
        		</tr>
           
            
        	</tbody>
        </table>
        </div></div></div></div>
</div>
</div>
@endsection


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
