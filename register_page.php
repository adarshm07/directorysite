<?php
require_once 'class/user.php';
require_once 'config.php';

if($_SESSION["user"] == true) {
    header('Location: ./index_.php');
}
// Turn off all error reporting
error_reporting(0);
?>
<html>
<head>
<title>Thalassery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width="device-width, initial-scale="1">
      <link rel="stylesheet" href="css/main_search.css">
      <link rel="stylesheet" href="css/style_list.css">
      <link rel="stylesheet" href="css/bundle.css">
      <link rel="stylesheet" href="css/bootsp.css">
      <link rel="stylesheet" href="css/login_page.scss">
      <!--Script online-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar-fixed-top navbar-default">
  <div class="container-fluid" >
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>  
    <a class="navbar-brand" href="./">Ty<div id="background"></div>
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li class=""><a href="./about.html">About</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./register_page.php"> Sign Up</a></li>
      <li><a href="./login_page.php">Login</a></li>
      <!--<li class="button-navbar"><a href="./add-listing.php"><i class=""></i> Add Listing</a></li>-->
    </ul>
  </div>
  </div>
</nav>
<div class="wrapper">
<section class="columns">
	
	<div class="column">
        <center><h2>User</h2>
    <br>
    <button class="btn btn-primary"><a href="">Register</a></button>
    </center>
		
	</div>
	
	<div class="column">
    <center><h2>Business Owner</h2>
    <br>
    <a href="" class="btn btn-primary alink">Register</a>
    </center>
	</div>
  
    <div class="column">
    <center><h2>Taxi</h2>
    <br>
    <button class="btn btn-primary"><a href="">Register</a></button>
    </center>
	</div>
	
</section>
</div>