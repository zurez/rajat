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
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
        $(".nav-tabs a").click(function(){
            $(this).tab('show');
        });
    });
    </script>
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

<div class="container">
  <h2>Dynamic Tabs</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Home</a></li>
    <li><a href="#menu1">Menu 1</a></li>
    <li><a href="#menu2">Menu 2</a></li>
    <li><a href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

<!--chnage this button to active only when radiobutton is clicked-->
<div class="container">
  <h2>Archive Table</h2>
  <p>Click On the radio button in the first column & click edit.</p>            
  <table style="width: auto;" class="table  table-striped  table-condensed">
    <thead>
      <tr>
        <th>Select</th>
        <th>Name</th>
        <th>Desciption</th>
        <th>Team</th>
        <th>Date</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>VC Intro</td>
        <td>Vice Chancellor on Radio</td>
        <td>Vineet, Rauhilla</td>
        <td>29/06/15</td>
        <td>
        <button type="button" class="btn btn-primary active">Edit</button>
        </td>
      </tr>

      <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>Gyanodaya</td>
        <td>Gyanodaya train to North-East</td>
        <td>Rauhilla,Vineet,Him</td>
        <td>21/06/15</td>
        <td>
        <button type="button" class="btn btn-primary active">Edit</button>
        </td>
       </tr>
       <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>Antardhwani</td>
        <td>Antardhwani 2015</td>
        <td>Rauhilla,Vineet,Him,Abhi</td>
        <td>12/02/15</td>
        <td>
        <button type="button" class="btn btn-primary active">Edit</button>
        </td>
       </tr>
        
    </tbody>
  </table>
</div>

<button type="button" class="btn btn-primary active">Delete</button>

<button type="button" class="btn btn-primary active">Upload a new FIle</button>
<br><br><br>

<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name">
      </div>
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="1" id="description"></textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="team">Team</label>
    <div class="col-sm-10">
      <textarea class="form-control" rows="1" id="team"></textarea>
    </div></div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="date">Date</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="1" id="date"></textarea>
      </div>
    </div>

    <div class="col-sm-offset-2 col-sm-10">
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
    <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div></div>
</div>

</body>
</html>