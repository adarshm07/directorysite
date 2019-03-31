<head>
<title>Thalassery Directory</title>
<link rel="stylesheet" href="./css/style.css">
      <link rel="stylesheet" href="./css/style_login.css">
      <link rel="stylesheet" href="./css/bootsp.css">
      <link href="../././assets/css/dashboard_two.css" rel="stylesheet" />
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">			
			<script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!--JS Script-->
    <script src="./assets/js/dashboard.js"></script>
    <script src="./assets/js/require.min.js"></script>
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
                <img src="./demo/brand/tabler.svg" class="h-6" alt="">
              </div>
              <form class="card" action="" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Create new account</div>
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
                    <label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkbox" onclick="MyFunction()" />
                      <span class="custom-control-label" required name="checkbox" value="Create new account" id="agree">Agree the <a href="terms.html">terms and policy</a></span>
                    </label>
									</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="register-submit" id="register-submit" onclick="javascript:myFunction()" tabindex="4" class="form-control btn btn-primary btn-block" value="Create new account" >
		</div>
	</div>
	<div class="text-center text-muted">
		<br>
								Already have account? <a href="login_.php">Sign in</a>
								<br>
								<a href="activate_.php">Activate your account.</a>
							</div>
</div>
<script type="text/javascript">
function myFunction() {
    if(document.getElementById("checkbox").checked == true){
        document.getElementById("register-submit").submit();
    }
    else{
        alert("You have to agree on terms and conditions");
    }
}
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