<?php
require_once 'class/user.php';
require_once 'config.php';

if($_SESSION["user"] != true) {
    echo("Access denied!");
    header('Location: login_.php');
}

// Turn off all error reporting
error_reporting(0);
?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Dashboard</title>

        <meta name="description" content="Dashboard" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-font-awesome" href="./user/css/form.css" />
        <link rel="stylesheet" id="css-ionicons" href="./user/assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="css/bootsp.css" />
        <link rel="stylesheet" type="text/css" href="./dist/upload_style.css">
        
        <!-- End Stylesheets -->
        <script type="text/javascript" src="./dist/assets/js/core/jquery.min.js"></script>
        <script type="text/javascript" src="./dist/upload_script.js"></script>
        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    </head>
    <body style="background-color:rgb(250, 248, 248);">
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
      <li><a href="./dist">Dashboard</a></li>
      <li><a href="./logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>
<div class="container" style="margin: 60px;">
<?php
//Establishing Connection with Server
$connection = mysqli_connect("localhost", "root", "");
//$userid = isset($_POST['userid']) ? $_POST['userid'] : '';
//$_SESSION['user']['id']=$userid;

//Selecting Database from Server
$db = mysqli_select_db($connection, "sms");
if(isset($_POST['insert'])){

//Fetching variables of the form which travels in URL
//$userid = isset($_POST['userid']) ? $_POST['userid'] : '';

$list_title = $_POST['list_title'];
$list_tagline = $_POST['list_tagline'];
$list_description = $_POST['list_description'];
$list_location = $_POST['list_location'];
$list_number = $_POST['list_number'];
$cname = $_POST['cname'];
$file = file_get_contents($_FILES["image"]["tmp_name"]);

if($list_title !=''||$list_location !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "insert into list(list_title, list_tagline, list_description, list_location, list_number, cname, name) values ('$list_title', '$list_tagline', '$list_description', '$list_location', '$list_number', '$cname', '$file')");
echo "<div class='alert alert-info'>Data Inserted successfully.</div>";
}
else{
echo "<div class='alert alert-info'>Insertion Failed, Some Fields are Blank.</div>";   
}

}
//Closing Connection with Server
mysqli_close($connection);
?>
<div class="row" style="background-color: white; margin: 20px; padding: 40px; border-radius: 4px;">
    <div class="col-sm-6">
            <div class="jumbotron" style="margin:10px; padding: 20px; background-color: rgb(229, 251, 253);">
                    <h2 style="font-size:25px; font-weight:500;">Quick Tip</h2>
                    <p style="font-size:16px; line-height: 24px; color: rgb(119, 111, 111);">Add information about your business below.</p>
</div>
<br>
<br>
<form action="listing-row.php" method="post" enctype="multipart/form-data">
                <input type="text" name="list_number" class="form-control margin-bottom-10 error-msg" value="<?php if (isset($_POST['list_number'])) echo $_POST['list_number']; ?>" placeholder="Phone Number">
                <textarea rows="5" cols="25" placeholder="Description" class="form-control margin-bottom-10 error-msg" name="list_description" value="<?php if (isset($_POST['list_description'])) echo $_POST['list_description']; ?>"></textarea>
    
            </div>
    <div class="col-sm-6">
                <!--Title-->
            <a href="#" data-toggle="tooltip" data-placement="top" title="Name of the Business"></a>
            <label for="usr">Title <small>*</small></label>
            <input type="text" name="list_title" class="form-control margin-bottom-10 error-msg" value="<?php if (isset($_POST['list_tagline'])) echo $_POST['list_tagline']; ?>" placeholder="Tagline">
            <div class="form-group">
            <input type="file" name="image" id="image" />
          </div>
            <?php
include ('./conn.php');
$result = mysqli_query($conn, "SELECT * FROM `categories` ORDER BY `categories`.`cname` ASC");
echo "<select name='cname' class='form-control margin-bottom-10 error-msg'>";
echo "<option>Select Category</option>";
while($row = mysqli_fetch_array($result))
  {
    echo "<option name='cname'>" . $row['cname'] . "</option>";
  }
mysqli_close($conn);
?>


            <!--Location-->
            <div class="row">
  <label for="usr"> &nbsp; &nbsp; Address <small>*</small></label>
  <div class="panel-body">
   <input id="autocomplete" placeholder="Enter your address"
      onFocus="geolocate()" type="text" class="form-control" name="list_location">
      <br>
   <div id="address">
      <div class="row">
         <div class="col-md-6">
            <label class="control-label">Street address</label>
            <input class="form-control" id="street_number" disabled="true">
         </div>
         <div class="col-md-6">
            <label class="control-label">Landmark</label>
            <input class="form-control" id="route" disabled="true">
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <label class="control-label">City</label>
            <input class="form-control field" id="locality" disabled="true">
         </div>
         <div class="col-md-6"> 
            <label class="control-label">State</label>
            <input class="form-control" id="administrative_area_level_1" disabled="true">
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <label class="control-label">Zip code</label>
            <input class="form-control" id="postal_code" disabled="true">
         </div>
         <div class="col-md-6">
            <label class="control-label">Country</label>
            <input class="form-control" id="country" disabled="true">
         </div>
      </div>
   </div>
</div>
  </div>
</div>  
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlTUk0dqOT1G2sQcV5VKS4uGpnW5Q8RrI&libraries=places&callback=initAutocomplete"
        async defer></script>
<script>
    var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
      </script>

<div class="col-sm-6">
<div class="row">
<input class="btn btn-success" style="float: right;" type="submit" name="insert" id="insert" value="Submit" />
                <br><br>

</form>
    </div>
</div>
</div>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>