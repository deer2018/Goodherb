@extends('layouts.volunteer.main')


@section('content')
<div class="card">
<div class="card-header">ประวัติส่วนตัว</div>
<br>
<div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    
    <div class="row">
        
        <div class="col-md-7">
            
            <div class="table-responsive">
            <form method="POST" action="{{ url('/volunteer_per/' . $User->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}


                        <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">

                            <label for="username" class="control-label">{{ 'ชื่อ' }}<font size="2" color="#FF0000">*</font></label>
                            <input class="form-control" name="username" type="text" id="username" value="{{ isset($User->username) ? $User->username : ''}}" required>
                            {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
                            <label for="surname" class="control-label">{{ 'นามสกุล' }}<font size="2" color="#FF0000">*</font></label>
                            <input class="form-control" rows="5" name="surname" type="text" id="surname" value="{{ isset($User->surname) ? $User->surname : ''}}" required>
                            {!! $errors->first('surname', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
                            <label for="sex" class="control-label">{{ 'เพศ' }}</label>
                            <select name="sex" class="form-control" id="sex">
                                <option value=""selected disabled>-กรุณาเลือกเพศ-</option>
                                @foreach (json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->sex) && $User->sex == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
                            <label for="age" class="control-label">{{ 'อายุ' }}</label>
                            <input class="form-control" name="age" type="number" id="age" value="{{ isset($User->age) ? $User->age : ''}}">
                            {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
                            <label for="phone" class="control-label">{{ 'เบอร์โทรศัพท์' }}<font size="2" color="#FF0000">*</font></label>
                            <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($User->phone) ? $User->phone : ''}}" required>
                            {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">

                            <label for="address" class="control-label">{{ 'ที่อยู่' }}<font size="2" color="#FF0000">*</font></label>
                            <input class="form-control" name="address" type="text" id="address" value="{{ isset($User->address) ? $User->address : ''}}" required>
                            {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                        </div>

                        <!-- <div class="form-group {{ $errors->has('province') ? 'has-error' : ''}}">
                        <label for="address" class="control-label">{{ 'จังหวัด' }}<font size="2" color="#FF0000">*</font></label>
                          <select id="input_province" onchange="showAmphoes()" name="province" class="form-control" required>
                          <option value=""selected disabled>กรุณาเลือกจังหวัด</option>
                          </select>
                        </div>

                        <div class="form-group {{ $errors->has('district') ? 'has-error' : ''}}">
                        <label for="address" class="control-label">{{ 'อำเภอ/เขต' }}<font size="2" color="#FF0000">*</font></label>
                          <select id="input_amphoe" onchange="showTambons()" name="district" class="form-control" required>
                          <option value=""selected disabled>กรุณาเลือกเขต/อำเภอ</option>
                          </select>
                        </div>
                        
                        <div class="form-group {{ $errors->has('subdistrict') ? 'has-error' : ''}}">
                        <label for="address" class="control-label">{{ 'ตำบล/แขวง' }}<font size="2" color="#FF0000">*</font></label>
                          <select id="input_tambon" onchange="showZipcode()" name="subdistrict" class="form-control" required>
                          <option value=""selected disabled>กรุณาเลือกแขวง/ตำบล</option>
                          </select>
                        </div>

                        <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : ''}}">
                        <label for="address" class="control-label">{{ 'รหัสไปรษณีย์' }}<font size="2" color="#FF0000">*</font></label>
                          <input id="input_zipcode" placeholder="รหัสไปรษณีย์" name="zipcode" class="form-control" required>
                        </div> -->

                        <div class="form-group {{ $errors->has('race') ? 'has-error' : ''}}">
                            <label for="race" class="control-label">{{ 'เชื้อชาติ' }}</label>
                            <input class="form-control" name="race" type="text" id="race" value="{{ isset($User->race) ? $User->race : ''}}">
                            {!! $errors->first('race', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('religion') ? 'has-error' : ''}}">
                            <label for="religion" class="control-label">{{ 'ศาสนา' }}</label>
                            <select name="religion" class="form-control" id="religion">
                                <option value=""selected disabled>-กรุณาเลือกศาสนา-</option>
                                @foreach (json_decode('{"พุทธ":"พุทธ","คริสต์":"คริสต์","อิสลาม":"อิสลาม","ฮินดู":"ฮินดู"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->religion) && $User->religion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('religion', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('relationship') ? 'has-error' : ''}}">
                            <label for="relationship" class="control-label">{{ 'สถานภาพสมรส' }}</label>
                            <select name="relationship" class="form-control" id="relationship">
                                <option value=""selected disabled>-กรุณาเลือกสถานภาพสมรส-</option>
                                @foreach (json_decode('{"โสด":"โสด","สมรส":"สมรส","หม้าย":"หม้าย","หย่า":"หย่า","แยกกันอยู่":"แยกกันอยู่"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->relationship) && $User->relationship == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('relationship', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('occupation') ? 'has-error' : ''}}">
                            <label for="occupation" class="control-label">{{ 'อาชีพ' }}</label>
                            <select name="occupation" class="form-control" id="occupation">
                                <option value=""selected disabled>-กรุณาเลือกอาชีพ-</option>
                                @foreach (json_decode('{"ข้าราชการ/รัฐวิสาหกิจ":"ข้าราชการ/รัฐวิสาหกิจ","ค้าขาย/ธุรกิจส่วนตัว/เจ้าของกิจการ":"ค้าขาย/ธุรกิจส่วนตัว/เจ้าของกิจการ","เกษตรกรรม/ประมง":"เกษตรกรรม/ประมง","พนักงานบริษัท":"พนักงานบริษัท","นักเรียน/นักศึกษา":"นักเรียน/นักศึกษา"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->occupation) && $User->occupation == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group {{ $errors->has('income') ? 'has-error' : ''}}">
                            <label for="income" class="control-label">{{ 'รายได้ต่อเดือน' }}</label>
                            <select name="income" class="form-control" id="income">
                                <option value=""selected disabled>-กรุณาเลือกรายได้-</option>
                                @foreach (json_decode('{"ต่ำกว่า 3,000 บาท":"ต่ำกว่า 3,000 บาท","3,000 - 5,000 บาท":"3,000 - 5,000 บาท","5,000 - 10,000 บาท":"5,000 - 10,000 บาท","10,000 - 20,000 บาท":"10,000 - 20,000 บาท","20,000 บาทขึ้นไป":"20,000 บาทขึ้นไป"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->income) && $User->income == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('income', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('education') ? 'has-error' : ''}}">
                            <label for="education" class="control-label">{{ 'ระดับการศึกษา' }}</label>
                            <select name="education" class="form-control" id="education">
                                <option value=""selected disabled>-กรุณาเลือกระดับการศึกษา-</option>
                                @foreach (json_decode('{"ประถมศึกษา":"ประถมศึกษา","มัธยมศึกษาตอนต้น":"มัธยมศึกษาตอนต้น","มัธยมศึกษาตอนปลาย/ปวช.":"มัธยมศึกษาตอนปลาย/ปวช.","อนุปริญญา/ปวส./ปวท":"อนุปริญญา/ปวส./ปวท","ปริญญาตรี":"ปริญญาตรี","สูงกว่าปริญญาตรี":"สูงกว่าปริญญาตรี"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->education) && $User->education == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('education', '<p class="help-block">:message</p>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('relevance') ? 'has-error' : ''}}">
                            <label for="relevance" class="control-label">{{ 'ความเกี่ยวข้องกับผู้ป่วยที่ดูแล' }}<font size="2" color="#FF0000">*</font></label>
                            <select name="relevance" class="form-control" id="relevance" required>
                                <option value=""selected disabled>-กรุณาเลือกความเกี่ยวข้องกับผู้ป่วยที่ดูแล-</option>
                                @foreach (json_decode('{"บิดา":"บิดา","มารดา":"มารดา","บุตร":"บุตร","พี่":"พี่","น้อง":"น้อง","ญาติ":"ญาติ"}', true) as $optionKey => $optionValue)
                                <option value="{{ $optionKey }}" {{ (isset($User->relevance) && $User->relevance == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('relevance', '<p class="help-block">:message</p>') !!}
                        </div>

                <div class="container-fluid">
                    <div class="row">                  
                            <div class="col-md-10">
                                <a href="{{ url('/volunteer_per') }}" title="Back"><button class="btn btn-info" ><i  aria-hidden="true"></i>ย้อนกลับ</button></a>
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
<script>
document.addEventListener('DOMContentLoaded', (event) => {
    console.log("START");
    showProvinces();    
});
function showProvinces(){
    //PARAMETERS
    fetch("{{ url('/') }}/api/provinces")
        .then(response => response.json())
        .then(result => {
            console.log(result);
            //UPDATE SELECT OPTION
            let input_province = document.querySelector("#input_province");
            input_province.innerHTML = "";
            for(let item of result){
                let option = document.createElement("option");
                option.text = item.province;
                option.value = item.province;
                input_province.appendChild(option);                
            }
            //QUERY AMPHOES
            showAmphoes();
        });
}
function showAmphoes(){
    let input_province = document.querySelector("#input_province");
    fetch("{{ url('/') }}/api/province/"+input_province.value+"/amphoes")
        .then(response => response.json())
        .then(result => {
            console.log(result);
            //UPDATE SELECT OPTION
            let input_amphoe = document.querySelector("#input_amphoe");
            input_amphoe.innerHTML = "";
            for(let item of result){
                let option = document.createElement("option");
                option.text = item.amphoe;
                option.value = item.amphoe;
                input_amphoe.appendChild(option);                
            }
            //QUERY AMPHOES
            showTambons();
        });
}
function showTambons(){
    let input_province = document.querySelector("#input_province");
    let input_amphoe = document.querySelector("#input_amphoe");
    fetch("{{ url('/') }}/api/province/"+input_province.value+"/amphoe/"+input_amphoe.value+"/tambons")
        .then(response => response.json())
        .then(result => {
            console.log(result);
            //UPDATE SELECT OPTION
            let input_tambon = document.querySelector("#input_tambon");
            input_tambon.innerHTML = "";
            for(let item of result){
                let option = document.createElement("option");
                option.text = item.tambon;
                option.value = item.tambon;
                input_tambon.appendChild(option);                
            }
            //QUERY AMPHOES
            showZipcode();
        });
}
function showZipcode(){
    let input_province = document.querySelector("#input_province");
    let input_amphoe = document.querySelector("#input_amphoe");
    let input_tambon = document.querySelector("#input_tambon");
    fetch("{{ url('/') }}/api/province/"+input_province.value+"/amphoe/"+input_amphoe.value+"/tambon/"+input_tambon.value+"/zipcodes")
        .then(response => response.json())
        .then(result => {
            console.log(result);
            //UPDATE SELECT OPTION
            let input_zipcode = document.querySelector("#input_zipcode");
            input_zipcode.value = "";
            for(let item of result){
                input_zipcode.value = item.zipcode;
                break; 
            }
        });
    
}
</script>
@endsection