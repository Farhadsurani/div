<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter name']) !!}
</div>

<!-- Designation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('designation', 'Designation:') !!}
    {!! Form::text('designation', null, ['class' => 'form-control', 'placeholder'=>'Enter designation']) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder'=>'Enter comment']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($testimonial))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.testimonials.index') !!}" class="btn btn-default">Cancel</a>
</div>