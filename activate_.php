<html>
<head>
<title>Thalassery Directory</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <!--php login-->
<?php
	require_once 'class/user.php';
	require_once 'config.php';
	$user->indexHead();
	$user->indexTop();
	$user->activationForm();
	$user->indexMiddle();
	$user->indexFooter();
?>
</body>
</html>