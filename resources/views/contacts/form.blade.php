<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label col-md-3']) !!}
    <div class="col-md-9">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-3 col-md-9">
        {!!Form::submit(isset($submitButtonText)?$submitButtonText:'Create',['class'=>'btn btn-primary'])!!}
        <a href="{!!url('contacts')!!}" class="btn btn-default">Cancel</a>
    </div>
</div>