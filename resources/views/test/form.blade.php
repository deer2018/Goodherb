<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <div class="radio">
        <label><input name="category" type="radio" value="1" {{ (isset($test) && 1 == $test->category) ? 'checked' : '' }}> Yes</label>
    </div>
    <div class="radio">
        <label><input name="category" type="radio" value="0" @if (isset($test)) {{ (0 == $test->category) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
    </div>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
