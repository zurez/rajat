{{Form::open(array('action'=>'AdminController@addnotif'))}}
Notif {{Form::text('notification')}}
URL {{Form::text('url')}}

{{Form::submit()}}
{{Form::close()}}