<html>
    <head>
        <title>Change password</title>
        <link href=".././css/bootsp.css" rel="stylesheet" />
      <link href=".././assets/css/dashboard_two.css" rel="stylesheet" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
     
    <body>
    <nav class="navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="./">Thalassery</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li class=""><a href="./about.html">About</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./signup_.php"> Sign Up</a></li>
      <li><a href="./login_.php">Login</a></li>
    </ul>
  </div>
</nav>
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="images/logo_icon.png" height="100px" width="100px" class="h-6" alt="">
              </div>
                <div class="card-body p-6">
                  <div class="card-title">Change Password</div>
    <form method="post" action="changes.php" class="form-group">
    <div class="form-group">
								<input type="email" name="email" placeholder="Email" class="form-control"/>
</div>
<div class="form-group">
                                <input type="password" name="op" placeholder="Old Password" class="form-control"/>
</div>
<div class="form-group">
								<input type="password" name="np" placeholder="New Password" class="form-control"/>
</div>
                                <div class="row">
		<div class="col-sm-6 col-sm-offset-3">
								<input type="submit" value="Submit" name="change" class="form-control btn btn-primary btn-block"/>
						
                                </form></div>
                                </div>
</div>
<div class="text-center text-muted">
                Don't have account yet? <a href="signup_.php">Sign up</a>
							<br>
							<a href="login_.php">Login to your account.</a></div>
		</div>
		</div>
		</div>
                                
                                <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
         </head>
    </body>
</html>