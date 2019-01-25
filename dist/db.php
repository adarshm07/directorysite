<?php
include ('conn.php');
$id=$_GET['id'];
$connection = mysqli_connect("localhost", "root", "");
//Selecting Database from Server
$db = mysqli_select_db($connection, "sms");
if(isset($_POST['submit'])){

//Fetching variables of the form which travels in URL

$approve = $_POST['approve'];

if($approve!=''){
//Insert Query of SQL
$query = mysqli_query($connection, "insert into list(approve) values('$approve') where id='$id'");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";   
}

}
//Closing Connection with Server
mysqli_close($connection);
header('Location: index_approve.php');
?>