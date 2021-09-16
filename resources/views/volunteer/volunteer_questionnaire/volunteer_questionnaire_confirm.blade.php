@extends('layouts.volunteer.main')

@section('content')
<div class="container">
      

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">แบบสอบถาม</div>
                    <div class="card-body">

	<table style="text-align: center" class="table table-bordered">
        <thead>
		<tr>
			<th  rowspan="2">กรอกแบบสอบถามสำเร็จแล้วค่ะ</th>
	</table>

	<td>
  <div class="col" style="text-align: left">
  <a href="{{ url('/volunteer_questionnaire') }}" class="btn btn-success btn-sm" title="Go_Back">
  <i class="fa fa-plus" aria-hidden="true"></i>ย้อนกลับ</a></div>
  </td>

</div>
</div>
</div>
</div>
@endsection