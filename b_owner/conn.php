<?php
 
//mysqli Procedural
$conn = mysqli_connect("localhost","root","","adminuser");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>