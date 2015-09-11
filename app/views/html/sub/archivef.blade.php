<html>
<head>
	<script src="{{URL::asset('audiojs/audio.min.js')}}"></script>
	 <script>
	// 	  audiojs.events.ready(function() {
	// 	    var as = audiojs.createAll();
	// 	  });
	// </script>
</head>
<body>
<table>
	<tr>
		<th>Program</th><th>Team Members</th><th>Listen Now</th>
	</tr>
@foreach ($data as $d)
	<tr>
		<td><label>{{$d->description}}</label></td>
		<td><label>{{$d->team}}</label></td>
		<td><audio controls> <source src=<?php echo URL::asset('audio/'.$d->filename)?> preload="auto" type ="audio/mpeg"></audio></td>
	</tr>
</table> <br><br>
@endforeach
</body>
</html>