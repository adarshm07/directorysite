<html>
    <head>
        <title>Login</title>
    </head>
    <body>
    <?php
	require_once 'class/user.php';
	require_once 'config.php';
	$user->indexHead();
	$user->indexTop();
	$user->loginForm();
?>
    </body>
</html>