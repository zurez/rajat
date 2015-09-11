

<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('uploadphoto') }}">Add photos to gallery</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('managephotos') }}">Manage Photos</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('addnotif') }}">Add Notifications</a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{ URL::to('managenotif') }}">Manage Notifications </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('addarchive')}}"> Add to Archive </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('managearchive')}}">Manage Archive </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('addteam')}}"> Add to team </a></button>
<button type="button" class="btn btn-info btn-lg"><a href="{{URL::to('manageteam')}}">Manage Team </a></button>


<br><br><br><br>
<a href="{{ URL::to('logout') }}">Logout</a>