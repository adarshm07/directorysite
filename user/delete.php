<?php
	include('conn.php');
	$list_id=$_GET['list_id'];
	mysqli_query($conn,"delete from list where `list`.`list_id`='$list_id'");
	header('location:index.php');
 
?>