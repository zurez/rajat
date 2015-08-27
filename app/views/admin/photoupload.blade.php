<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is Delhi University Community Radio Official website.">
    <meta name="author" content="Vineet">

    <title>Delhi University Community Radio</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
</head>
<body>


<div class="container">
  <div class="page-header">
    <h1>Admin Panel</h1>      
  </div>
</div>

<div class="panel">

            
            <button type="button" class="btn btn-info btn-lg"><a href="adminarchive.html">Manage Archives</a></button>
            <button type="button" class="btn btn-info btn-lg"><a href="adminschedule.html">Manage Schedule</a></button>
            <button type="button" class="btn btn-info btn-lg"><a href="admingallery.html">Manage Gallery</a></button>
            <button type="button" class="btn btn-info btn-lg"><a href="adminteam.html">Manage Team</a></button>
            <button type="button" class="btn btn-info btn-lg"><a href="adminnotification.html">Manage Notification</a></button>
    
</div>

<br><br><br>
<button type="button" class="btn btn-primary active">Upload a New photo</button>

<a class="btn btn-primary active" href="{{URL::to('managephotos')}}">Delete a photo</a>
<button type="button" class="btn btn-primary active">Edit Description</button>
<br><br><br>


{{Form::open(array('files'=>true))}}

    <label class="control-label col-sm-2" for="small">Upload Photo</label>
    <div class="col-sm-10">
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>{{Form::file('image')}}</span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
    </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="description">Description:</label>
          <div class="col-sm-9">
            <textarea class="form-control"  name = "caption"rows="1" id="description"></textarea>
          </div>
        </div>
        {{Form::submit('Save Photo')}}
        {{Form::close()}}



</body>
</html>