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
  <h2>Notification Table</h2>
  <p>Click On the radio button in the first column & click edit.</p>            
  <table style="width: auto;" class="table  table-hover">
    <thead>
      <tr>
        <th>Select</th>
        <th>Desciption</th>
        <th>Link</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>Radio coverage by Sania Khan</td>
        <td>http://www.google.com</td>
        <td>
            <button type="button" class="btn btn-primary active">Edit</button>
        </td>
      </tr>
<!--chnage this button to active only when radiobutton is clicked-->
      <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>Gyanodaya</td>
        <td>http://www.google.com</td>
        <td>
            <button type="button" class="btn btn-primary active">Edit</button>
        </td>
       </tr>
       <tr>
        <td><form role="form"><div class="radio">
        <label><input type="radio" name="optradio"></label>
        </div></td>
        <td>Antardhwani</td>
        <td>http://www.google.com</td>
        <td>
            <button type="button" class="btn btn-primary active">Edit</button>
        </td>
       </tr>
        
    </tbody>
  </table>
</div>

<button type="button" class="btn btn-primary active">Delete</button>


<button type="button" class="btn btn-primary active">Add a new Notification</button>
<button type="button" class="btn btn-primary active">Change Message</button>

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
</div>
<br><br>

<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Message</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3" id="description"></textarea>
      </div>
    </div>
</div>
<br>
<div class="col-sm-offset-6 col-sm-6">
<button type="button" class="btn btn-primary active">Save</button></div>
<br><br>
</body>
</html>