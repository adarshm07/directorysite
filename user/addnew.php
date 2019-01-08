<?php
	include('conn.php');
 
	$list_title=$_POST['list_title'];
	$list_location=$_POST['list_location'];
	$list_description=$_POST['list_description'];
	$query= "insert into list (list_title, list_location, list_description) values ('$list_title', '$list_location', '$list_description')";
	mysqli_query($conn, $query);
	header('location:index.php');
 
?>