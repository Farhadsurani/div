<!-- Image Field -->
@if(!isset($gallery))
    <div class="form-group col-sm-12">
        {!! Form::label('image', 'Image:') !!}
        <input type="file" name="image[]" accept="image/*" class="form-control" multiple>
    </div>
@endif

@if(isset($gallery))
    <div class="form-group col-sm-12">
        {!! Form::label('image', 'Image:') !!}
        <input type="file" name="image[]" accept="image/*" class="form-control" multiple>
    </div>
    <div class="form-group col-sm-3">
        <img src="{{$gallery->image_url}}" width="100%"/>
    </div>
@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($gallery))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.galleries.index') !!}" class="btn btn-default">Cancel</a>
</div>