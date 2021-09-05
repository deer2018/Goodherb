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

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="บันทึก">
                    </div>

                    </form> 