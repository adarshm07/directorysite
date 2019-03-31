<?php
	require_once './class/user.php';
	require_once 'config.php';
	if($_SESSION['user']['id'] !== ''){
		header('Location: .././dist/manager');
	}else{
		header('Location: index.php');
	}
?>
