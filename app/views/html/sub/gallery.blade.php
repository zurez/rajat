<html>
<head></head>
<body>
	@foreach($images as $i)
		<img src='galleryphotos/{{$i->photoname}}'>
		<b>{{$i->caption}}</b>

	@endforeach
</body>
</html>