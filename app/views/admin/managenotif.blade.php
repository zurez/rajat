

@foreach($a as $d)

<table>
<tr>{{$d->notification}}</tr>
<tr>{{link_to_route('deletenotif','Delete',array($d->id))}}</tr>
</table>


@endforeach