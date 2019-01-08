<?php
	include('conn.php');
 
	$list_id=$_GET['list_id'];
 
	$list_title=$_POST['list_title'];
	$list_location=$_POST['list-location'];
	$list_description=$_POST['list_description'];
 
	mysqli_query($conn,"update users set list_title='$list_title', list_location='$list_location', list_description='$list_description' where list_id='$list_id'");
	header('location:index.php');
 
?>