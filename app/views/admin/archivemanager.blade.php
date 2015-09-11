<h1>Manage Archive</h1>



	

@foreach($data as $d)
<table>
<tr>{{$d->filename}}</tr>
<tr>{{link_to_route('deletearchive','Delete',array($d->id))}}</tr>
</table>


@endforeach