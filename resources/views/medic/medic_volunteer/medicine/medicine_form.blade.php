<div class="form-group {{ $errors->has('medicine') ? 'has-error' : ''}}">
    <label for="medicine" class="control-label">{{ 'ดอกไม้' }}</label>
    <select name="medicine" class="form-control" id="medicine" >
    @foreach (json_decode('{"Agrimony":"Agrimony","Aspen":"Aspen","Beech":"Beech","Centaury":"Centaury","Cerato":"Cerato","Cherry Plum":"Cherry Plum","Chestnut Bud":"Chestnut Bud","Chicory":"Chicory","Clematis":"Clematis","Crab Apple":"Crab Apple","Elm":"Elm","Gentian":"Gentian","Gorse":"Gorse","Heather":"Heather","Holly":"Holly","Honeysuckle":"Honeysuckle","Hornbeam":"Hornbeam","Impatiens":"Impatiens","Larch":"Larch","Mimulus":"Mimulus","Mustard":"Mustard","Oak":"Oak","Olive":"Olive","Pine":"Pine","Red Chestnut":"Red Chestnut","Rock Rose":"Rock Rose","Rock Water":"Rock Water","Scleranthus":"Scleranthus","Star of Bethlehem":"Star of Bethlehem","Sweet Chestnut":"Sweet Chestnut","Vervain":"Vervain","Vine":"Vine","Walnut":"Walnut","Water Violet":"Water Violet","White Chestnut":"White Chestnut","Wild Oat":"Wild Oat","Wild Rose":"Wild Rose","Willow":"Willow"}', true) as $optionKey => $optionValue)
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




