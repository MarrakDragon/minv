
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="col-md-2 control-label">{{ trans('categories.name') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="name" type="text" id="name" value="{{ old('name', optional($category)->name) }}" maxlength="255" placeholder="{{ trans('categories.name__placeholder') }}">
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    <label for="description" class="col-md-2 control-label">{{ trans('categories.description') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="description" type="text" id="description" value="{{ old('description', optional($category)->description) }}" maxlength="16777215">
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
    <label for="type" class="col-md-2 control-label">{{ trans('categories.type') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="type" type="number" id="type" value="{{ old('type', optional($category)->type) }}" min="-2147483648" max="2147483647" required="true" placeholder="{{ trans('categories.type__placeholder') }}">
        {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('_lft') ? 'has-error' : '' }}">
    <label for="_lft" class="col-md-2 control-label">{{ trans('categories._lft') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="_lft" type="number" id="_lft" value="{{ old('_lft', optional($category)->_lft) }}" min="0" max="4294967295" required="true" placeholder="{{ trans('categories._lft__placeholder') }}">
        {!! $errors->first('_lft', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('_rgt') ? 'has-error' : '' }}">
    <label for="_rgt" class="col-md-2 control-label">{{ trans('categories._rgt') }}</label>
    <div class="col-md-10">
        <input class="form-control" name="_rgt" type="number" id="_rgt" value="{{ old('_rgt', optional($category)->_rgt) }}" min="0" max="4294967295" required="true" placeholder="{{ trans('categories._rgt__placeholder') }}">
        {!! $errors->first('_rgt', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
    <label for="parent_id" class="col-md-2 control-label">{{ trans('categories.parent_id') }}</label>
    <div class="col-md-10">
        <select class="form-control" id="parent_id" name="parent_id">
        	    <option value="" style="display: none;" {{ old('parent_id', optional($category)->parent_id ?: '') == '' ? 'selected' : '' }} disabled selected>{{ trans('categories.parent_id__placeholder') }}</option>
        	@foreach ($parents as $key => $parent)
			    <option value="{{ $key }}" {{ old('parent_id', optional($category)->parent_id) == $key ? 'selected' : '' }}>
			    	{{ $parent }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('parent_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

