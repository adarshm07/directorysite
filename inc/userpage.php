<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <!--<link rel="stylesheet" href="css/style_login.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <!--php login-->
   <nav id="navbar" class="">
  <div class="nav-wrapper">
    <!-- Navbar Logo -->
    <div class="logo">
      <!-- Logo Placeholder for Inlustration -->
      <a href="/thalassery"><i class="fas fa-chess-knight"></i>Thalassery</a>
    </div>

    <!-- Navbar Links -->
    <ul id="menu">
    <li><a href="#home">Home</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="login_.php">Login</a></li>
    <li><a href="signup_.php">Register</a></li>
    <?php if(isset($_SESSION['id'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a>
<?php }else{ ?>
  <a class="link" href="login_.php" style="text-decoration:none">login</a>
<?php } ?>
    </ul>
  </div>
</nav>

<!-- Menu Icon -->
<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
</div>


<div class="overlay-menu">
  <ul id="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<div class="container">
  <h2>Welcome <?php print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; ?></h2>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead><tbody>
    <?php if($_SESSION['user']['user_role'] == 2){
    	foreach ($vars as $user) {
    	?>
    		<tr>
		        <td><?=$user['fname']?></td>
		        <td><?=$user['lname']?></td>
		        <td><?=$user['email']?></td>
		    </tr>
    	<?php
    	}
    }else{ ?>
      <tr>
        <td><?=$_SESSION['user']['fname']?></td>
        <td><?=$_SESSION['user']['lname']?></td>
        <td><?=$_SESSION['user']['email']?></td>
      </tr>    
    <?php } ?></tbody>
  </table>
  <p><a href='logout.php'>Logout</a></p>
</div>

</body>
</html>
