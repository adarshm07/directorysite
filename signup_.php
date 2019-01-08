<html>
<head>
<title>Thalassery Directory</title>
</head>
<body>
    <!--php login-->
<?php
	require_once 'class/user.php';
	require_once 'config.php';
	$user->indexHead();
	$user->indexTop();
	$user->registerForm();
	$user->indexFooter();
?>
</body>
</html>