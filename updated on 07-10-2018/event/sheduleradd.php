<?php
include 'connection.php';
//echo "hello";
//die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Shedule Adding</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" />
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

<!-- include summernote css/js-->
<link href="summernote.css" rel="stylesheet">
<script src="summernote.js"></script>

</head>
<body>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<div class="jumbotron text-center">
<h3><strong>Admin <strong></h3>
<p>Sheduler Adding</p>
</div>

<div class="container">
  <div class="row">
  <div class="col-sm-4">
  </div>
   <div class="col-sm-4">
   

<div class="form-group row">
  <label for="" class="col-2 col-form-label">Heading</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" id="heading">
  </div>
</div>

<div class="form-group row">
  <label for="" class="col-2 col-form-label">Body</label>
  <div class="col-10">
    <input class="form-control" type="text" value="" id="body">
  </div>
</div>

<div class="form-group row">
  <label for="example-number-input" class="col-2 col-form-label">Number</label>
  <div class="col-10">
    <input class="form-control" type="number" value="42" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  <div class="col-10">
    <input class="form-control" type="datetime-local" value="" id="date">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-2 col-form-label">Month</label>
  <div class="col-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-week-input" class="col-2 col-form-label">Week</label>
  <div class="col-10">
    <input class="form-control" type="week" value="2011-W33" id="example-week-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-time-input" class="col-2 col-form-label">Time</label>
  <div class="col-10">
    <input class="form-control" type="time" value="13:45:00" id="example-time-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-color-input" class="col-2 col-form-label">Color</label>
  <div class="col-10">
    <input class="form-control" type="color" value="#563d7c" id="example-color-input">
  </div>
</div>
<div class="form-group row">
  <div id="summernote">Hello Summernote</div>
  </div>
</div>
  </div>
  <div class="col-sm-4">
  </div>
  </div>
  
<div class="row">
<div class="col-sm-4">
  </div>
<div class="col-sm-4">
<button type="button" class="btn btn-primary">Edit</button>
<button type="button" class="btn btn-danger">Delete</button>
<button type="button" class="btn btn-success">Save</button>

</div>
<div class="col-sm-4">
  </div>
</div>
</div>

</body>

</html>