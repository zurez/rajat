{{Form::open(array('action'=>'AdminController@deletephoto'))}}

@foreach ($data as $b)
@foreach ($b as $a)

 <div class="box">
<!-- {{Form::checkbox('photo_name[]',$a)}} -->
   			
{{ HTML::image('galleryphotosthumbnail/'.$a) }}
{{Form::checkbox('photo_name[]',$a)}}
@endforeach
@endforeach
{{Form::submit()}}
{{Form::close()}}