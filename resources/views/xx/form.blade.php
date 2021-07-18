<div >
    <label for="title" class="control-label">{{ 'วินิจฉัย' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($crud->title) ? $crud->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'อัพเดท' : 'Create' }}">
</div>
