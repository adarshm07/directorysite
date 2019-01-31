<?php
require_once 'class/user.php';
require_once 'config.php';

if($_SESSION["user"] == true) {
    header('Location: ./index_.php');
}
// Turn off all error reporting
error_reporting(0);
?>
<html>
<head>
<title>Thalassery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width="device-width, initial-scale="1">
      <link rel="stylesheet" href="css/main_search.css">
      <link rel="stylesheet" href="css/style_list.css">
      <link rel="stylesheet" href="css/bundle.css">
      <link rel="stylesheet" href="css/bootsp.css">
      <!--Script online-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar-fixed-top navbar-default">
  <div class="container-fluid" >
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>  
    <a class="navbar-brand" href="./">Ty<div id="background"></div>
    </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="./">Home</a></li>
      <li class=""><a href="./about.html">About</a></li>
      <li><a href="./contact.html">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./signup_.php"> Sign Up</a></li>
      <li><a href="./login_.php">Login</a></li>
      <!--<li class="button-navbar"><a href="./add-listing.php"><i class=""></i> Add Listing</a></li>-->
    </ul>
  </div>
  </div>
</nav>

<!--search box-->
<div class="s003">
      <form action="search.php" method="GET">
        <div class="inner-form">
          <!--<div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="">Category</option>
                <option>New Arrivals</option>
                <option>Sale</option>
                <option>Ladies</option>
                <option>Men</option>
                <option>Clothing</option>
                <option>Footwear</option>
                <option>Accessories</option>
              </select>
            </div>
          </div>-->
          <div class="input-field second-wrap">
            <input id="search" type="text" name="query" placeholder="Enter Keywords?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
<!--Main Section-->

        <div class="gray-bg pt80 pb40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                        <h2>Most Recent Places</h2>
                        <p>
                            List most recent places are submitted by our users.
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
<div class="card" style="display: -webkit-inline-box;">
<?php
include('conn.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };   
  
$sql = "SELECT * FROM list ORDER BY id LIMIT 3";  
$rs_result = mysqli_query($conn, $sql); 
?>

<?php  
while ($row = mysqli_fetch_assoc($rs_result)) {
?>  
<div class="clearfix card" style="width: 20rem; margin-right: 20rem;">
	<img class="card-img-top" src="https://placehold.it/300x200" alt="">
	<div class="card-body">
	  <center><h4 class="card-title"><?php echo $row['list_title']?></h4></center>
	</div>
</div>  
<?php  
};  
?>
</div>
</div>
</div>
</div>
                <div class="text-center mb30">
                    <a href="./listing-grid.php" class="btn btn-lg btn-rounded btn-primary">View All Listing</a>
                </div>
            </div>
        </div>
        <div class="pt80 pb40">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                        <h2>Browse our listing</h2>
                        <p>
                            List most recent places are submitted by our users. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb10">                   
                        <ul class="list-unstyled row listing-categories">
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-cutlery"></i>
                                    Restaurants
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">5</span> Breakfast</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">7</span>Brunch</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">9</span>Lunch</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">14</span>Dinner</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-map-marker"></i>
                                    Travel
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">11</span>Destinations</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">23</span>Holidays</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">17</span>Transportations</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">32</span>Swimming</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-home"></i>
                                    Real Estate
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">33</span>Villa</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">22</span>For Rent</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">42</span>For Sale</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">54</span>Apartment</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->

                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-desktop"></i>
                                    Computer & Software
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">21</span>Hardware</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">9</span>Software</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">22</span>Games</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">122</span>Templates</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="clearfix"></li>
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-car"></i>
                                    Automotive
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">21</span>For Buy</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">43</span>For Sale</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">12</span>Mechanics</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">54</span>Gas Station</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-glass"></i>
                                    Nightlife
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">4</span>Bar & pubs</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">7</span>Concert</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">9</span>Cinemas</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>Disco</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-suitcase"></i>
                                    Jobs
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">6</span>Consulting</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>law firms</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">9</span>Accounts</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">8</span>Cook</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-medkit"></i>
                                    Medicine
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">13</span>Dental</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">21</span>Neurology</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">12</span>Heart</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">16</span>Eye</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="clearfix"></li>
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-gamepad"></i>
                                    Sports
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">1</span>Football</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">2</span>Games</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>Golf</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">9</span>Tickets</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-users"></i>
                                    Pets
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>Dogs</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">4</span>Cats</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">8</span>Golf</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">5</span>Birds</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-user-o"></i>
                                    Education
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>Design</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">4</span>App Development</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">8</span>Android</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">5</span>AngularJs</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="col-md-3 mb30">
                                <div class="listing-header">
                                    <i class="fa fa-shopping-bag"></i>
                                    For Sale
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="badge badge-default pull-right">3</span>Cloths</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">4</span>Accessories</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">8</span>Decoration</a></li>
                                    <li><a href="#"><span class="badge badge-default pull-right">5</span>Auto</a></li>
                                    <li class="more-link"><a href="#">View All</a></li>
                                </ul>
                            </li><!--/li-->
                            <li class="clearfix"></li>
                        </ul>
                    </div>

                </div>
                <div class="text-center mb40">
                    <a href="#" class="btn btn-lg btn-rounded btn-primary">View All Listing</a>
                </div>
            </div>
        </div>  
        <div class="bg-faded pt80 pb40 mb70 ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 mb30">
                        <div class="icon-center-card">
                            <i class="fa fa-envelope-o"></i>
                            <h3>Full support</h3>
                            <p>
                                Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div><!--/col-->
                    <div class="col-sm-4 mb30">
                        <div class="icon-center-card">
                            <i class="fa fa-map-marker"></i>
                            <h3>More than 1000 places</h3>
                            <p>
                                Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div><!--/col-->
                    <div class="col-sm-4 mb30">
                        <div class="icon-center-card">
                            <i class="fa fa-code"></i>
                            <h3>Free updated</h3>
                            <p>
                                Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div><!--/col-->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                    <h2>Promoted Locations</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>           
        </div>
        <div class="owl-carousel owl-theme owl-places mb40">
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img1.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Drinks</a>
                            <h3><a href="#">Tasty Coffee</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img2.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Restaurant</a>
                            <h3><a href="#">Italian Food</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img3.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Vacation</a>
                            <h3><a href="#">Beach Life</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img4.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Property</a>
                            <h3><a href="#">House Rent</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img5.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Bars</a>
                            <h3><a href="#">Soft Drink</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img6.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Swimming</a>
                            <h3><a href="#">Swimming Pools</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img7.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Electronics</a>
                            <h3><a href="#">Mobile Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-overlay">
                    <img src="images/img8.jpg" class="img-responsive" alt="">
                    <div class="card-hover">
                        <div class="card-content">
                            <a class="label label-primary" href="#">Shop</a>
                            <h3><a href="#">Cloth Stores</a></h3>
                            <ul class="list-inline mb0 rating-list">
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star text-warning"></i></li>
                                <li><i class="fa fa-star-half-empty text-warning"></i></li>
                            </ul>
                        </div><!--/card-content-->
                        <div class="card-icons">
                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                            <a href="#" title="View Detail"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="dark-bg pt80 pb40 mb70 bg-parallax parallax-overlay" data-jarallax='{"speed": 0.2}' style='background-image: url(images/bg3.jpg)'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                        <h2>Events near you</h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mb40">
                        <div class="event-card">
                            <div class="date-icon">
                                <div class="text-center">
                                    25 <span>March</span>
                                </div>
                            </div>
                            <span><i class="fa fa-clock-o"></i> 8:00 Am - 11:00 Pm</span>
                            <h4 class="mt10"><a href="#">Nulla faucibus convallis dui</a></h4>
                            <p>
                                Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque.
                            </p>
                            <div class="text-left more-link">
                                <a href="#">View Detail</a>
                            </div>
                        </div>
                    </div><!--/col-->
                    <div class="col-sm-4 mb40">
                        <div class="event-card">
                            <div class="date-icon">
                                <div class="text-center">
                                    25 <span>March</span>
                                </div>
                            </div>
                            <span><i class="fa fa-clock-o"></i> 8:00 Am - 11:00 Pm</span>
                            <h4 class="mt10"><a href="#">Nulla faucibus convallis dui</a></h4>
                            <p>
                                Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque.
                            </p>
                            <div class="text-left more-link">
                                <a href="#">View Detail</a>
                            </div>
                        </div>
                    </div><!--/col-->
                    <div class="col-sm-4 mb40">
                        <div class="event-card">
                            <div class="date-icon">
                                <div class="text-center">
                                    25 <span>March</span>
                                </div>
                            </div>
                            <span><i class="fa fa-clock-o"></i> 8:00 Am - 11:00 Pm</span>
                            <h4 class="mt10"><a href="#">Nulla faucibus convallis dui</a></h4>
                            <p>
                                Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque.
                            </p>
                            <div class="text-left more-link">
                                <a href="#">View Detail</a>
                            </div>
                        </div>
                    </div><!--/col-->
                </div>
            </div>
        </div>
        <div class="container mb40">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center center-heading mb40">
                    <h2>Latest from blog</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 mb40">
                    <div class="post-card">
                        <a href="#"><img src="images/img2.jpg" alt="" class="img-responsive mb15"></a> 
                        <div class="post-content">
                            <h4><a href="#">Standard post with image</a></h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...
                            </p>
                        </div>
                    </div>
                </div><!--/col-->
                <div class="col-sm-4 mb40">
                    <div class="post-card">
                        <a href="#"><img src="images/img3.jpg" alt="" class="img-responsive mb15"></a> 
                        <div class="post-content">
                            <h4><a href="#">Standard post with image</a></h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...
                            </p>
                        </div>
                    </div>
                </div><!--/col-->
                <div class="col-sm-4 mb40">
                    <div class="post-card">
                        <a href="#"><img src="images/img4.jpg" alt="" class="img-responsive mb15"></a> 
                        <div class="post-content">
                            <h4><a href="#">Standard post with image</a></h4>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout...
                            </p>
                        </div>
                    </div>
                </div><!--/col-->
            </div>
        </div>
        <div class="gray-bg pt40 pb40 newsletter-form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>
                            Subscribe and be notified about new locations</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletter-card">                          
                            <form>
                                <input type="text" class="form-control" placeholder="Enter your Email...">
                                <input type="submit" value="Subscribe" class="newsletter-submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row clients-row">
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
                <div class="col-md-2 col-sm-4">
                    <a href="#"><img src="images/cl1.png" alt="" class="img-responsive"></a>
                </div>
            </div>
        </div>

        <!--footer-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb30">
                        <h3>About Us</h3>
                        <p>
                            Doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p>
                        <ul class="list-inline f-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                       
                    </div>
                    <div class="col-md-4 mb30">
                        <h3>Support Information</h3>
                        <p>
                            <small>Address:</small><br>
                            124, Lorem Street, New York, USA
                        </p>
                        <p>
                            <small>Call Us:</small><br>
                            <a href="#">+01 1800-234-45678</a>
                        </p>
                        <p>
                            <small>Mail Us:</small><br>
                            <a href="#">support@finder.com</a>
                        </p>
                    </div>
                    <div class="col-md-4 mb30">
                        <h3>useful links</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="f-links list-unstyled">
                                    <li><a href="#">Restaurants</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Deal & Coupons</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Restaurants</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="f-links list-unstyled">
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Cinemas</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Privacy & policy</a></li>
                                    <li><a href="#">T & C</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    &copy; Copyright 2018. All Right Reserved.
                </div>
            </div>
        </footer>
        <!-- jQuery-->
        <!--<script src="js/plugins/all.js"></script>
        <script src="js/finder.custom.js"></script>-->


    <script src="js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
    
</body>
</html>