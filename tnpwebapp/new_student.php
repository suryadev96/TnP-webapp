<?php

session_start();
include 'db.php';
$conn = get_conn();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="NITK Surathkal">
    <meta name="author" content="SuryaDev">
    <link rel="icon" href="../../favicon.ico">

    <title> Training and Placement Cell- NITK Surathkal </title>

  
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
   
  </head>

  <body background="./images/green-bg_001.jpg">
<?php include './header.php'?>

<br>
<br>
<br>
<br>

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1> TnP Cell- NITK Surathkal</h1>
            <p> welcome to online portal for all information related to training and placement of students of National Institute of Technology, Karnataka Surathkal </p>
          
          <div class="row">
            <div class="col-xs-6 col-lg-6">

<?php
 
  if (isset($_SESSION['entryno']) or isset($_SESSION['cid']))
 {
echo "welcome ".$_SESSION['entryno'].$_SESSION['cid']." <br> ";
 }

 else {

?>
 <p> Please enter information below to send a request for registration to the TnP Officer of NITK Surathkal </p>
<form action="register_student.php" method="POST">

  <div class="form-group"> 
    <label for="exampleInputPassword1">Entry Number</label>
    <input type="text" class="form-control" name="entryno" placeholder="Entry Number">
  </div>
  <div class="form-group"> 
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="First Name">
  </div>
 <div class="form-group"> 
    <label for="exampleInputPassword1">Middle Name</label>
    <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
  </div>
 <div class="form-group"> 
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
  </div>
 
   <div class="form-group">
    <label for="resumeShortlist"> Department </label>
     <input type="radio" class="form-control" name="department" value="CS"> Computer Science
    <input type="radio" class="form-control" name="department" value="EE">  Electrical Engineering 
    <input type="radio" class="form-control" name="department" value="ME"> Mechanical Engineering
  </div>

  <div class="form-group"> 
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
 
<div class="form-group">
    <label for="exampleInputEmail1"> Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
 
 <div class="form-group">
    <label for="exampleInputEmail1"> CGPA </label>
    <input type="text" class="form-control" name="cgpa" placeholder="Enter cgpa">
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1"> 10th percen </label>
    <input type="text" class="form-control" name="percen10" placeholder="Enter 10th">
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1"> 12th percen </label>
    <input type="text" class="form-control" name="percen12" placeholder="Enter 12th">
  </div>
  <div class="form-group">
    <label for="resumeShortlist"> Applying for </label>
     <input type="radio" class="form-control" name="applying_for" value="placement"> Placement
    <input type="radio" class="form-control" name="applying_for" value="training">  Training
  </div>

 
  <button type="submit" class="btn btn-default">Submit</button>
</form>




<?php
     }

?>
            </div><!--/.col-xs-6.col-lg-4-->

  
</div>
<br>
<br>

       
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
      
           

        </div><!--/.sidebar-offcanvas-->
    
  </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Developed as part of Database Project for CS303, NITK Surathkal </p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/jquery/jquery.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>

  </body>
</html>

