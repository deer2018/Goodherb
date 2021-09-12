@extends('layouts.medic.main')

@section('content')
<div class="container-fluid">
 <div class="card shadow mb-4">
      <div class="card-header py-3"><h6 class="m-1 font-weight-bold text-primary">แบบสอบถามของ {{ $users->id }}</h6></div>                        
          <div class="card-body">
                <div class="table-responsive">
                        <table class="table">   
                            <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>แบบสอบถาม</th>
                                        <th>วันที่</th>          
                                    </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>แบบสอบถามครั้งที่ 1</td>
                                        <td>1-8-64</td>
                                        <td><a href="{{ url('/predicate1/'. $item->id) }}" title="Click"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>แบบสอบถามครั้งที่ 2</td>
                                        <td>14-8-64</td>
                                        <td><a href="{{ url('/medic_quest3') }}" title="Back"><button  class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>คลิก</button></a></td>
                                     
                                    </tr>
                            </tbody>
                        </table>
                </div>
          </div>
  </div>
</div>
@endsection
