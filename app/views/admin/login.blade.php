{{Form::open()}}
	{{ Form::label('username', 'Username') }}
    {{ Form::text('username', Input::old('username'), array('placeholder' => 'username')) }}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password') }}
    {{Form::submit()}}
{{Form::close()}}








{{-- <div class="form-group">
              <input class="form-control input-lg" placeholder="Email" type="text">
            </div>
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Password" type="password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Login</button> --}}