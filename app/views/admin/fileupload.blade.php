<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('uploadphoto') }}">Add photos to gallery</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('managephotos') }}">Manage Photos</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('addnotif') }}">Add Notifications</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('managenotif') }}">Manage Notifications </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('addarchive')}}"> Add to Archive </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('managearchive')}}">Manage Archive </a></button>


<br><br><br><br>
{{Form::open(array('files'=>true))}}
<input type="text" name="desc" placeholder="Description">
<input type="file" name="file">
{{-- <input type="text" name="tag" placeholder="Tag"> --}}		
<select name="tag">
	<option value="education">Education</option>
	<option value="entertainment">Entertainment</option>
	<option value="information">Information</option>
	<option value="misc"> Miscellonous</option>

</select>
<input type="text" name="team" placeholder="Team">

{{Form::submit()}}
{{Form::close()}}