<<<<<<< HEAD
<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"update users set fname='$fname', lname='$lname', email='$email' where id='$id'");
	header('location:index.php');
 
=======
<?php
	include('conn.php');
 
	$id=$_GET['id'];
 
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
 
	mysqli_query($conn,"update users set fname='$fname', lname='$lname', email='$email' where id='$id'");
	header('location:index.php');
 
>>>>>>> 2c2dc1c5121cc201c8f149d083fdf4c31d93bd94
?>