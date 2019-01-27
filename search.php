<?php
    $conn = mysqli_connect("localhost","root","","sms");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta charset="UTF-8">
<meta name="viewport" content="width="device-width, initial-scale="1">
      <link rel="stylesheet" href="css/main_search.css">
      <link rel="stylesheet" href="css/style_list.css">
      <link rel="stylesheet" href="css/bundle.css">
      <link rel="stylesheet" href="css/bootsp.css">
      <!--Script online-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      
<div class="wrapper">    
</head>
<body>
<nav class="navbar-fixed-top navbar-default">
  <div class="container-fluid" >
    <div class="navbar-header">
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
<div class="jumbotron" style="margin-top: 60px;">
    <div class="container">
        <div class="row">
<?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        /** $query = mysqli_real_escape_string($query); */
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($conn, "SELECT * FROM list
            WHERE (`list_title` LIKE '%".$query."%') OR (`list_description` LIKE '%".$query."%') OR (`list_location` LIKE '%".$query."%')") or die(mysqli_connect_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
        
        $sql = ("SELECT COUNT(*) FROM users");
        $rs = mysqli_query($conn, $sql);
         //-----------^  need to run query here
        
         $result = mysqli_fetch_array($rs);
         //here you can echo the result of query
         echo $result[0];
        
    

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysqli_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['list_title']."</h3><br><h4>".$results['list_location']."</h4>".$results['list_description']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Try searching with a keyword.";
    }
?>
</div>
</div>
</div>
</body>
</html>