<?php
	require_once './class/user.php';
	require_once 'config.php';
	if($_SESSION['user']['id'] !== ''){
		header('Location: .././dist/taxi');
	}else{
		header('Location: index.php');
	}
?>
