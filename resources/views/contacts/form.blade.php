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
        {!!Form::submit(isset($submitButtonText)?$submitButtonText:'Create',['class'=>'btn btn-primary btn_submit'])!!}
        <a href="{!!url('contacts')!!}" class="btn btn-default">Cancel</a>
    </div>
</div>

@section('css')
    <style type="text/css">
        .error { color: red; }
        input.error { border: 1px solid red; }
    </style>
@endsection

@section('js')
    <script src="{{url('bower_components/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{url('bower_components/jquery-validation/dist/additional-methods.min.js')}}"></script>
    <script type="text/javascript">
        $("#contactsForm").validate({
            rules: {
                'name':{
                    required:true
                },
                'email': {
                    required:true,
                    email:true
                }
            },
            submitHandler: function (form) {
                $btn = $('.btn_submit');
                $btn.prop({ disabled: 'disabled', 'aria-disabled':'true' });
                $btn.addClass('disabled');
                form.submit();
            }
        });
    </script>
@stop