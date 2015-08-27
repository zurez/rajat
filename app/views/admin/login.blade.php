{{Form::open()}}
{{ Form::label('username', 'Username') }}
    {{ Form::text('username', Input::old('username'), array('placeholder' => 'username')) }}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{Form::submit()}}
{{Form::close()}}