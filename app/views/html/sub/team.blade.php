

<h1>Meet Our Team..........there u go.. </h1>


@foreach($teams as $d)
<table>
<tr>
	<td>{{$d->name}}</td>
	<td>{{$d->bio}}</td>
	<td>{{$d->tag}}</td>
	<td>{{$d->link}}</td>

</tr>	


</table>

@endforeach
