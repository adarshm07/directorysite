<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dest = $_POST['dest'];
$todest = $_POST['todest'];
$date = $_POST['date'];
$user = $_SESSION["user"]['id'];

$sql = "INSERT INTO taxi(name, email, phone, dest, todest, date, user) VALUES ('$name', '$email', '$phone', '$dest', '$todest', '$date', '$user')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>