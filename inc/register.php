<head>
<title>Thalassery Directory</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style_login.css">
      <link rel="stylesheet" href="css/main.css">
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
    <li><a href="#">Home</a></li>
    <li><a href="#">Services</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="login_.php">Login</a></li>
    <li><a href="signup_.php">Register</a></li>
    </ul>
  </div>
</nav>

<!-- Menu Icon -->
<div class="menuIcon">
  <span class="icon icon-bars"></span>
  <span class="icon icon-bars overlay"></span>
</div>


<div class="overlay-menu" style="float:left;">
  <ul id="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</div>
<div class="login_page">
    <h1>Login</h1>
</div>
<div class="form-group">
	<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
</div>
<div class="form-group">
	<input type="password" name="password" id="password1" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$("#login-submit").click(function(){
			if($("#username").val() != "" && $("#password1").val() != "" && validateEmail($("#username").val())){
				$.ajax({
				  method: "POST",
				  url: "<?=loginfile?>",
				  data: { username: $("#username").val(), password: $("#password1").val() }
				}).done(function( msg ) {
				    if(msg !== ""){
				    	alert(msg);
				    }else{
				    	window.location = "<?=userfile?>";
				    }
				});
			}else{
				alert("Please fill all fields with valid data!");
			}
		});
	});
</script>
<a href="activate_.php">Activate your account.</a>
<a href="signup_.php" style="float:right;">Register</a>

<div class="overlay-menu" style="float:right;">
  <ul id="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
</div>
<div class="form-group">
	<input type="text" name="fname" id="fname" tabindex="1" class="form-control" placeholder="First name" value="">
</div>
<div class="form-group">
	<input type="text" name="lname" id="lname" tabindex="1" class="form-control" placeholder="Last name" value="">
</div>
<div class="form-group">
	<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
</div>
<div class="form-group">
	<input type="password" name="password" id="password2" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group">
	<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$("#register-submit").click(function(){
			if($("#fname").val() != "" && $("#lname").val() != "" && $("#email").val() != "" && $("#password2").val() != "" && validateEmail($("#email").val())){
				if($("#password2").val() === $("#confirm-password").val()){
					$.ajax({
					  method: "POST",
					  url: "<?=registerfile?>",
					  data: { fname: $("#fname").val(), lname: $("#lname").val(), email: $("#email").val(), password: $("#password2").val() }
					}).done(function( msg ) {
					   	alert(msg);
					});
				}else{
					alert("Passwords do not match!");
				}
				
			}else{
				alert("Please fill all fields with valid data!");
			}
		});
	});
</script>
<a href="activate_.php">Activate your account.</a>