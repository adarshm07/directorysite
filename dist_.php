<<<<<<< HEAD
<?php
require_once 'class/user.php';
require_once 'conn.php';
session_start();
if($_SESSION["user"] != true) {
    echo("Access denied!");
    header('Location: login_.php');
    exit();
}
if($_SESSION['user']['user_role'] == 2){
    header('Location: ./dist');
} else {
    header('Location: "C://wamp64/www/Thalassery-Official/login_.php"');
    exit();
}
=======
<?php
require_once 'class/user.php';
require_once 'conn.php';
session_start();
if($_SESSION["user"] != true) {
    echo("Access denied!");
    header('Location: login_.php');
    exit();
}
if($_SESSION['user']['user_role'] == 2){
    header('Location: ./dist');
} else {
    header('Location: "C://wamp64/www/Thalassery-Official/login_.php"');
    exit();
}
>>>>>>> 8b0a5556a3d49d317d3da43a426807416db28832
?>