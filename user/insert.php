<html>
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="wlist_idth=device-wlist_idth, initial-scale=1">
        <title>Add Listing</title>
        <link rel="stylesheet" href="css/insert.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
	<nav class="navbar-fixed-top navbar-default">
                <div class="container-flulist_id" >
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                    <a class="navbar-brand" href="./">Ty<div list_id="background"></div>
                  </a>
                  </div>
                  <div class="collapse navbar-collapse" list_id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="./">Home</a></li>
                    <li class=""><a href="./about.html">About</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                        <li><a href="./add-listing.html">Add Listing</a></li>
                        <li><a href="how-work.html">How it work</a></li>
                  </ul>
                </div>
                </div>
				</div>
              </nav>
			  <div class="page-bread mb70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>submit listing</h3>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
		</div>
		<div class="slist_idenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
		<div class="title"><h2>Add Listing</h2></div>
        <div class="jumbotron">
		
		<div class="container">
            <div class="row">
			
			<div class="form_div">
   
				<form action="insert.php" method="post">    <!-- method can be set POST for hlist_iding values in URL-->
					<input class="input" type="text" name="list_title" placeholder="Title" value="" />     
					<textarea class="input" type="text" name="list_description" placeholder="Description"></textarea>
					<textarea rows="5" cols="25" placeholder="Location" name="list_location"></textarea>
					<br />
					<input class="submit" type="submit" name="submit" value="Insert" />	

<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "root", "");

	//Selecting Database from Server
	$db = mysqli_select_db($connection, "sms");
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $list_title = $_POST['list_title'];
    $list_description = $_POST['list_description'];
	$list_location = $_POST['list_location'];
    if($list_title !=''||$list_location !=''){
	//Insert Query of SQL
    $query = mysqli_query($connection, "insert into list(list_title, list_description, list_location) values ('$list_title', '$list_description', '$list_location')");
	echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    }
    else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
    }
 
	}
	//Closing Connection with Server
	mysqli_close($connection);
?>					
				</form>
			</div>
		</div>
    </body>
</html>