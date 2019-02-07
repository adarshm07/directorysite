<?php

$servername = "locahost";
$username = "root";
$password = "";
$db= "db";

$conn = mysqli_connect("localhost","root","","sms");


$list_title = '';
$query = "SELECT list_title FROM list WHERE id=1";
$result = $conn->query($query);
$row = mysqli_fetch_assoc($result);
$word = $row['list_title'];

echo $list_title;

?>