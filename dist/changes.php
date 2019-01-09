<<<<<<< HEAD
<?php
include('.././class/user.php');

$db = mysqli_connect("localhost","root","","sms");
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}

$pass=$_POST['op'];
$pass2=$_POST['np'];
$e=$_POST['id'].['email'];
$wp=password_hash($pass, PASSWORD_DEFAULT);
$wpp=password_hash($pass2, PASSWORD_DEFAULT);
$s="UPDATE  `users` SET  `password` =  '$wpp' WHERE  `users`.`email` ='$e'";
mysqli_query($db,$s);
header('location: ./base_pages_profile.php');
?>


=======
<?php
include('.././class/user.php');

$db = mysqli_connect("localhost","root","","sms");
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}

$pass=$_POST['op'];
$pass2=$_POST['np'];
$e=$_POST['id'].['email'];
$wp=password_hash($pass, PASSWORD_DEFAULT);
$wpp=password_hash($pass2, PASSWORD_DEFAULT);
$s="UPDATE  `users` SET  `password` =  '$wpp' WHERE  `users`.`email` ='$e'";
mysqli_query($db,$s);
header('location: ./base_pages_profile.php');
?>


>>>>>>> 2c2dc1c5121cc201c8f149d083fdf4c31d93bd94
