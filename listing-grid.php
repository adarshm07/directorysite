<html>
<head>
<title>Thalassery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width="device-width, initial-scale="1">
      <link rel="stylesheet" href="css/bootsp.css">
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
      <li><a href="./signup_.php"> Sign Up</a></li>
      <li><a href="./login_.php">Login</a></li>
      <!--<li class="button-navbar"><a href="./add-listing.php"><i class=""></i> Add Listing</a></li>-->
    </ul>
  </div>
  </div>
</nav>
<div class="container">

</div>
<div class="container" style="margin-top: 100px;">
<?php
include('conn.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  

  
$sql = "SELECT * FROM list ORDER BY id ASC";  
$rs_result = mysqli_query($conn, $sql); 
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>
<div class="jumbotron" style="max-height: 300px;">
<div class="container">
<div class="col-sm-4" style="display: -webkit-inline-box;"><img class="card-img-top" src="https://placehold.it/300x200" alt=""></div>
<div class="col-sm-4">
<h4 style="display: -webkit-inline-box; float:right;"><?php echo $row['list_title']?></h4>
<br><br>
<p class="card-text"><?php echo $row['list_description']?></p>
</div>
</div>
<div class="card-footer">
	  <a href="#" class="btn btn-primary" style="float: right;">Find Out More!</a>
      <br><hr width="100%" style="color: black;"><br>
	</div></div>
<hr width="100%">

<?php  
};  
?>

</div>