<div class="form-group {{ $errors->has('medicine') ? 'has-error' : ''}}">
    <label for="medicine" class="control-label">{{ 'ดอกไม้' }}</label>
    <select name="medicine" class="form-control" id="medicine" >
    @foreach (json_decode('{"Agrimony":"Agrimony","Aspen":"Aspen","Beech":"Beech"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($medicines->medicine) && $medicines->medicine == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('medicine', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
    <label for="quantity" class="control-label">{{ 'จำนวนหยด' }}</label>
    <input class="form-control" name="quantity" type="number" id="quantity" value="{{ isset($medicines->quantity) ? $medicines->quantity : ''}}" >
    {!! $errors->first('quantity', '<p class="help-block">:message</p>') !!}
</div>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'medicine_edit' ? 'อัพเดท' : 'Create' }}">
</div>
