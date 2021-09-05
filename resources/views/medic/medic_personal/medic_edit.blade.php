@extends('layouts.medic.main')

@section('content')
<div class="card">
<div class="card-header">ประวัติส่วนตัว</div>
<br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    
    <div class="row">
        <div class="col-md-3">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <!-- <li><a href="#"><span class="fab fa-google fa-fw"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li> -->
            </ul>
            <div style="text-align: center" > 
            <a href="#" title="Back"><button class="btn btn-warning"><i class="fa fa-user" aria-hidden="true"></i>แก้ไขรูป</button></a>
            </div>
        </div>
        <div class="col-md-7">
            
            <div class="table-responsive">
            <form method="POST" action="{{ url('/medic_personal/' . $User->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                           
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
                        
                        <label for="username" class="control-label">{{ 'ชื่อ' }}</label>
                        <input class="form-control" name="username" type="text" id="username" value="{{ isset($User->username) ? $User->username : ''}}" >
                        {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
                        <label for="surname" class="control-label">{{ 'นามสกุล' }}</label>
                        <input class="form-control" rows="5" name="surname" type="text" id="surname" value="{{ isset($User->surname) ? $User->surname : ''}}">
                        {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
                        <label for="sex" class="control-label">{{ 'เพศ' }}</label>
                        <select name="sex" class="form-control" id="sex" >
                        @foreach (json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true) as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($User->sex) && $User->sex == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                    </select>
                        {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
                        <label for="age" class="control-label">{{ 'อายุ' }}</label>
                        <input class="form-control" name="age" type="number" id="age" value="{{ isset($User->age) ? $User->age : ''}}" >
                        {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                        <label for="phone" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
                        <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($User->phone) ? $User->phone : ''}}" >
                        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                    </div>

                <div class="container-fluid">
                    <div class="row">                  
                            <div class="col-md-10">
                                <a href="{{ url('/medic_personal') }}" title="Back"><button class="btn btn-info" ><i  aria-hidden="true"></i>ย้อนกลับ</button></a>
                            </div>

                            <div class="col-md-2">
                                <input class="btn btn-primary" type="submit" value="บันทึก">
                            </div>
                    </div> 
                </div>       
                    <br> 
                    </form> 
            </div>
        </div>
    </div>
</div>
</div>                         
</div>  
@endsection

