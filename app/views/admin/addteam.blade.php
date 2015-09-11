


<br><br><br><br>
{{Form::open(array('files'=>true))}}

<input type="text" name="name" placeholder="Name">
<input type="text" name="posit" placeholder="Position">
<input type="text" name="desc" placeholder="Write About You">

<input type="file" name="file">
	
<select name="tag">
	<option value="m">Management</option>
	<option value="sv">Senior Volunteer</option>
	<option value="jv">Junior Volunteer</option>

</select>
<input type="text" name="link" placeholder="Provide your link!">

{{Form::submit()}}
{{Form::close()}}