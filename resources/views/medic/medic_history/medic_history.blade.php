@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            @include('medic.medic_sidebar')

            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ประวัติส่วนตัว</div>
                    <div class="card-body">
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ชื่อ' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($crud->title) ? $crud->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="control-label">{{ 'นามสกุล' }}</label>
    <input class="form-control" rows="5" name="content" type="text" id="content" value="{{ isset($crud->content) ? $crud->content : ''}}">
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'เพศ' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"ชาย":"ชาย","หญิง":"หญิง"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($crud->category) && $crud->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'อายุ' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($crud->user_id) ? $crud->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="บันทึก">
</div>

                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
