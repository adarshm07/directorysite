<head>
<title>Thalassery Directory</title>
<link rel="stylesheet" href="./css/bootsp.css">
      <link href=".././assets/css/dashboard_two.css" rel="stylesheet" />
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
<!--Activate-->
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="images/logo_icon.png" height="100px" width="100px" class="h-6" alt="">
              </div>
                <div class="card-body p-6">
                  <div class="card-title">Activate your account</div>
<div class="form-group">
	<input type="text" name="username" id="useractivation" tabindex="3" class="form-control" placeholder="Email" value="">
</div>
<div class="form-group">
	<input type="text" name="code" id="activationcode" tabindex="4" class="form-control" placeholder="Activation code">
</div>
<div class="form-group">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<input type="button" name="activate-submit" id="activate-submit" tabindex="4" class="form-control btn btn-primary btn-block" value="Activate">
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function() {
		$("#activate-submit").click(function(){
			if($("#useractivation").val() != "" && $("#activationcode").val() != "" && validateEmail($("#useractivation").val())){
				$.ajax({
				  method: "POST",
				  url: "<?=activatefile?>",
				  data: { email: $("#useractivation").val(), code: $("#activationcode").val() }
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
