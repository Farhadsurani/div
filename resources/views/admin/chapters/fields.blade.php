<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Chapter Title:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter Title']) !!}
    {!! Form::hidden('course_id', isset($course_id) ? $course_id: null, ['class' => 'form-control', 'placeholder'=>'Enter Title']) !!}
</div>
<div class="clearfix"></div>
<div class="form-group col-sm-12">
    {!! Form::label('details', 'Description:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control', 'placeholder'=>'Enter Description']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::file('video', null, ['class' => 'form-control']) !!}
</div>

<div class="clearfix"></div>
@isset($chapter)
    <div class="form-group col-sm-3">
        <img src="{{$chapter->image_url}}" alt="" width="100%"/>
    </div>
@endisset

<div class="clearfix"></div>
@isset($chapter->details->video)
    <div class="form-group col-sm-3">
        <video width="320" height="240" controls>
            <source src="{{url('storage/app/' . $video[0]->video)}}" type="video/mp4">
        </video>
    </div>
@endisset

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($chapter))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.chapters.index') !!}" class="btn btn-default">Cancel</a>
</div>