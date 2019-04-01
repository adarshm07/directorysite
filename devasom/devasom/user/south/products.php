<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /><!-- gallery css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" /><!-- for gallery lightninBox css -->

<link href="css/font-awesome.css" rel="stylesheet"><!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>
<?php 
session_start();
include_once("inc/db_connect.php");
include("inc/config.inc.php"); 

?><link href="style/style.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="script/cart.js"></script>

	<!-- header -->
	<div class="header">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
						<a class="navbar-brand" href="http://localhost/devasom/devasom/user/index.php">
							<h1>NALAMBALAM</h1>
						</a>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="http://localhost/devasom/devasom/user/index.php" class="active">Home</a></li>
								
								
								<li><a href="products.php">Products</a></li>
								<li><a href="view_cart.php"  id="cart-info" title="View Cart">  <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				
			}
			?></a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- //header -->

<!-- innerpages_banner -->
	<div class="innerpages_banner">
		<h2>AVAILABLE POOJAS</h2>
	</div>
<!-- //innerpages_banner -->

<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery" id="portfolio">
			<h3 class="heading">POOJA</h3>
				<div class="container">
	<div class="gallery-grids">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist" data-aos="zoom-in">
				<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">All</a></li>
				<li role="presentation"><a href="#teach" role="tab" id="teach-tab" data-toggle="tab" aria-controls="teach">Temple1</a></li>
				<li role="presentation"><a href="#train" role="tab" id="train-tab" data-toggle="tab" aria-controls="train">Temple1</a></li>
				<li role="presentation"><a href="#learn" role="tab" id="learn-tab" data-toggle="tab" aria-controls="learn">Temple1</a></li>
				<li role="presentation"><a href="#award" role="tab" id="award-tab" data-toggle="tab" aria-controls="award">Temple1</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<div class="tab_img">
						<ul class="products-container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form" style="text-align:center;">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img  class="product_image"  src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box">
						
						<div style="text-align:center;">
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<div style="text-align:center;"><button type="submit">Add to Cart</button></div>
					</div>
				</form>
				</li>
			<?php } ?></ul>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="teach" aria-labelledby="teach-tab">
				<div class="tab_img">
						<ul class="products-container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where catagory='cake'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box" style="text-align:center;">
						
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<div style="text-align:center;"><button type="submit">Add to Cart</button></div>
					</div>
				</form>
				</li>
			<?php } ?></ul>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="train" aria-labelledby="train-tab">
					<div class="tab_img">
						<ul class="products-container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where catagory='snackes'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box" style="text-align:center;">
						
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?></ul>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="learn" aria-labelledby="learn-tab">
					<div class="tab_img">
						<ul class="products-container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where catagory='biscuits'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box" style="text-align:center;">
						
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?></ul>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="award" aria-labelledby="award-tab">
				<div class="tab_img">
						<ul class="products-container">
						<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products  where catagory='pudding'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box" style="text-align:center;">
						
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?></ul>
						
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	</div>	
</section>
<!-- /Portfolio section -->	

<!-- subscribe -->

<!-- //subscribe -->

<!-- footer -->
	
			<div class="agileinfo_copyright">
				<p color="red">© 2018 Bakery In. All Rights Reserved | Design by W3layouts</a>
				</p>
			</div>
		
<!-- //footer -->
<footer class="py-5 bg-dark">
    <div class="container"> 
      <p class="m-0 text-center text-white">Designed By Shaniya,Amisha, Maria </p>
    </div>
    <!-- /.container -->
  </footer>
<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //Supportive js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

<!-- js for portfolio lightbox -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for portfolio lightbox -->

<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

</body>
</html>