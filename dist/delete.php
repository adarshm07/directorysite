<<<<<<< HEAD
<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where userid='$id'");
	header('location:index.php');
 
=======
<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where userid='$id'");
	header('location:index.php');
 
>>>>>>> 2c2dc1c5121cc201c8f149d083fdf4c31d93bd94
?>