<<<<<<< HEAD
<?php
include('.././class/user.php');

$db = mysqli_connect("localhost","root","","sms");
if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}

$pass=$_POST['op'];
$pass2=$_POST['np'];
$e=$_POST['email'];
$wp=password_hash($pass, PASSWORD_DEFAULT);
$wpp=password_hash($pass2, PASSWORD_DEFAULT);
$s="UPDATE  `users` SET  `password` =  '$wpp' WHERE  `users`.`email` ='$e'";
mysqli_query($db,$s);
header('location: ./change.php');
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
$e=$_POST['email'];
$wp=password_hash($pass, PASSWORD_DEFAULT);
$wpp=password_hash($pass2, PASSWORD_DEFAULT);
$s="UPDATE  `users` SET  `password` =  '$wpp' WHERE  `users`.`email` ='$e'";
mysqli_query($db,$s);
header('location: ./change.php');
?>


>>>>>>> 8b0a5556a3d49d317d3da43a426807416db28832
