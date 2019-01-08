<head>
<title>Thalassery Directory</title>
      <link href="./css/bootsp.css" rel="stylesheet" />
      <link href="./assets/css/dashboard_two.css" rel="stylesheet" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">			
			<script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!--JS Script-->
    <script src=".././assets/js/dashboard.js"></script>
    <script src=".././assets/js/require.min.js"></script>
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

<!--Login-->
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="images/logo_icon.png" height="100px" width="100px" class="h-6" alt="">
              </div>
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
<div class="form-group">
	<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
</div>
<div class="form-group">
	<input type="password" name="password" id="password1" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group">
<div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-primary btn-block" value="Log In">
		</div>
	</div>
</div>
<div class="text-center text-muted">
                Don't have account yet? <a href="signup_.php">Sign up</a>
							<br>
							<a href="activate_.php">Activate your account.</a></div>
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