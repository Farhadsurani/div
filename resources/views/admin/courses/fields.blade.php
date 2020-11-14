<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Title:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Title']) !!}
</div>
<div style="clear: both"></div>
<div class="form-group col-sm-12">
    {!! Form::label('details', 'Description:') !!}
    {!! Form::textarea('details', isset($course->details) ? $course->details->details:null, ['class' => 'form-control', 'placeholder'=>'Enter Description']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'placeholder'=>'Enter Course Amount']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('cover', 'Cover:') !!}
    {!! Form::file('cover', null, ['class' => 'form-control', 'placeholder'=>'Enter Description']) !!}
</div>

@isset($course)
    <div class="form-group col-sm-3">
        <img src="{{$course->details->image_url}}" width="100%"/>
    </div>
@endisset

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($course))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.courses.index') !!}" class="btn btn-default">Cancel</a>
</div>