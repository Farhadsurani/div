
<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Enter name']) !!}
</div>
<div style="clear: both"></div>
<div class="form-group col-sm-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', isset($subscription->details) ? $subscription->details->details: null,['class' => 'form-control', 'placeholder'=>'Enter details']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @if(!isset($subscription))
        {!! Form::submit(__('Save And Add Translations'), ['class' => 'btn btn-primary', 'name'=>'translation']) !!}
    @endif
    {!! Form::submit(__('Save And Add More'), ['class' => 'btn btn-primary', 'name'=>'continue']) !!}
    <a href="{!! route('admin.subscriptions.index') !!}" class="btn btn-default">Cancel</a>
</div>