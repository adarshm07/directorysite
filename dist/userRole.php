<?php
include ('conn.php');
$id=$_POST['userID'];
$connection = mysqli_connect("localhost", "root", "");
//Selecting Database from Server
$db = mysqli_select_db($connection, "sms");
if(isset($_POST['submit'])){

//Fetching variables of the form which travels in URL
$user_role = isset($_POST['user_role']) ? $_POST['user_role'] : '';

if($user_role != ''){
//Insert Query of SQL
$query = $query = mysqli_query($connection, "UPDATE users SET user_role = '{$user_role}' WHERE id = {$id}");

//$query = $query = mysqli_query($connection, "UPDATE list SET approve = 'pending' WHERE id = 50");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
}
}
//Closing Connection with Server
mysqli_close($connection);

?>
