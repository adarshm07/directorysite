<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$list_title = $_POST['list_title'];
	$list_tagline = $_POST['list_tagline'];
	$list_description = $_POST['list_description'];
	$list_location = $_POST['list_location'];
	$list_number = $_POST['list_number'];
	$cname = $_POST['cname'];
	$approve = $_POST['approve'];
 
	mysqli_query($conn,"update list set list_title='$list_title', list_location='$list_location', list_description='$list_description', list_location='$list_location', list_number='$list_number', cname='$cname', approve='$approve' where id='$id'");
	header('location:index.php');
 
?>