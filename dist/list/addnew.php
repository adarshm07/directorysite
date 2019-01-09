<<<<<<< HEAD
<?php
	include('conn.php');
 
	$list_title=$_POST['list_title'];
	$list_location=$_POST['list_location'];
	$list_description=$_POST['list_description'];
	$query= "insert into list (list_title, list_location, list_description) values ('$list_title', '$list_location', '$list_description')";
	mysqli_query($conn, $query);
	header('location:index_list.php');
 
=======
<?php
	include('conn.php');
 
	$list_title=$_POST['list_title'];
	$list_location=$_POST['list_location'];
	$list_description=$_POST['list_description'];
	$query= "insert into list (list_title, list_location, list_description) values ('$list_title', '$list_location', '$list_description')";
	mysqli_query($conn, $query);
	header('location:index_list.php');
 
>>>>>>> 2c2dc1c5121cc201c8f149d083fdf4c31d93bd94
?>