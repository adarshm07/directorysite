<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="listing/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="listing/css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="listing/css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="listing/css/set1.css">
    <!-- Swipper Slider -->
    <link rel="stylesheet" href="listing/css/swiper.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="listing/css/magnific-popup.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="listing/css/style.css">
    <Script src="./comments/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="dark-bg sticky-top" style="background-color:blue;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">Listing</a>
                        <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li class=""><a href="./about.html">About</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./register_page.php"> Sign Up</a></li>
      <li><a href="./login_page.php">Login</a></li>
      <!--<li class="button-navbar"><a href="./add-listing.php"><i class=""></i> Add Listing</a></li>-->
    </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
                                    
                                    <?php 
                                        $id = isset($_GET['id']) ? $_GET['id'] : '';
                                        $info = $connection->query("SELECT * FROM list WHERE id='".$_GET['id']."'");
                                        ?>
                                        <?php
                                        $fetch = $info->fetch_array(); ?>
                                        <img src="<?php echo $fetch['image']?>" class="img-circle" alt="Avatar" width="600px" height="400px">
                                        <h3 class="name"><?php echo $fetch['list_title'];?> </h3>
                                        <p class="name"><?php echo $fetch['list_description'];?> </p>
                                        <p class="name"><?php echo $fetch['list_location'];?> </p>
                                        <p class="name"><?php echo $fetch['list_number'];?> </p>
                                        <p class="name"><?php echo $fetch['cname'];?> </p>
										
									</div>
									
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
											
											</div>
											<div class="col-md-4 stat-item">
												
											</div>
											<div class="col-md-4 stat-item">
												
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<!--<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span><?php echo $fetch['dob']?></span></li>
											<li>Mobile <span><?php echo $fetch['phone']?></span></li>
											<li>Email <span><?php echo $fetch['email']?></span></li>
											<li>Email <span><?php echo $fetch['gender']?></span></li>
										</ul>
									</div>
								
									</div>
									
								</div>-->
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							
											
								<?php ?>
								<!-- END AWARDS -->
								
        </div>
        <?php
include('./comments/index.php');
?>
       
		<!-- END MAIN -->

<?php
?>