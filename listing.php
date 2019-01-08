<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Favicons -->
    <link rel="shortcut icon" href="#">
    <!-- Page Title -->
    <title>Listing &amp; Directory Website Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <!-- Simple line Icon -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Hover Effects -->
    <link rel="stylesheet" href="css/set1.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style_list1.css">
</head>

<body>
    <!--============================= HEADER =============================-->

    <!--//END HEADER -->
    <!--============================= DETAIL =============================-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 responsive-wrap">
                    <div class="row detail-filter-wrap">
                        <div class="col-md-4 featured-responsive">
                            <div class="detail-filter-text">
                                <p> <?php
                                                include('class/user.php');
                                                $connection = mysqli_connect('localhost', 'root', '', 'sms');
                                                $result = mysqli_query($connection, "SELECT  COUNT(*) as count FROM list");
                                                while ($row = mysqli_fetch_array($result)) {
                                                $var = $row['count'];
                                                echo $var. "";
                                                } ?> Results For <span>Restaurant</span></p>
                            </div>
                        </div>
                        <div class="col-md-8 featured-responsive">
                            <div class="detail-filter">
                                <p>Filter by</p>
                        </div>
                    </div>
                    <div class="row light-bg detail-options-wrap">
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="detail.html">
                                <?php
				
				$conn = mysqli_connect('localhost', 'root', '', 'sms');
                $query=mysqli_query($conn,"select * from `list' where id='$id'");
                $id = isset($_POST['id']) ? $_POST['id'] : '';                
				while($row=mysqli_fetch_array($query)){
                    ?>
                                    <img src="images/featured1.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-orange ">6.5</span>
                                    <div class="featured-title-box">
                                        <h6>Burger &amp; Lobster</h6>
                                        <p>Restaurant </p> <span>• </span>
                                        <p>3 Reviews</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p>1301 Avenue, Brooklyn, NY 11230</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>+44 20 7336 8898</p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p>https://burgerandlobster.com</p>
                                            </li>

                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="closed-now">CLOSED NOW</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php
                }
                ?>
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="detail.html">
                                    <img src="images/featured2.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green">9.5</span>
                                    <div class="featured-title-box">
                                        <h6>Joe’s Shanghai</h6>
                                        <p>Restaurant </p> <span>• </span>
                                        <p>3 Reviews</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p>1301 Avenue, Brooklyn, NY 11230</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>+44 20 7336 8898</p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p>https://burgerandlobster.com</p>
                                            </li>

                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="open-now">OPEN NOW</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="detail.html">
                                    <img src="images/featured3.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating">3.2</span>
                                    <div class="featured-title-box">
                                        <h6>Tasty Hand-Pulled Noodles</h6>
                                        <p>Restaurant </p> <span>• </span>
                                        <p>3 Reviews</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p>1301 Avenue, Brooklyn, NY 11230</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>+44 20 7336 8898</p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p>https://burgerandlobster.com</p>
                                            </li>

                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="closed-now">CLOSED NOW</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12 col-xl-6 featured-responsive">
                            <div class="featured-place-wrap">
                                <a href="detail.html">
                                    <img src="images/featured4.jpg" class="img-fluid" alt="#">
                                    <span class="featured-rating-green">9.5</span>
                                    <div class="featured-title-box">
                                        <h6>Pizza - Cicis</h6>
                                        <p>Restaurant </p> <span>• </span>
                                        <p>3 Reviews</p> <span> • </span>
                                        <p><span>$$$</span>$$</p>
                                        <ul>
                                            <li><span class="icon-location-pin"></span>
                                                <p>1301 Avenue, Brooklyn, NY 11230</p>
                                            </li>
                                            <li><span class="icon-screen-smartphone"></span>
                                                <p>+44 20 7336 8898</p>
                                            </li>
                                            <li><span class="icon-link"></span>
                                                <p>https://burgerandlobster.com</p>
                                            </li>

                                        </ul>
                                        <div class="bottom-icons">
                                            <div class="closed-now">CLOSED NOW</div>
                                            <span class="ti-heart"></span>
                                            <span class="ti-bookmark"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 responsive-wrap map-wrap">
                    <div class="map-fix">
                        <!-- data-toggle="affix" -->
                        <!-- Google map will appear here! Edit the Latitude, Longitude and Zoom Level below using data-attr-*  -->
                        <div id="map" data-lat="40.674" data-lon="-73.945" data-zoom="14"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//END DETAIL -->
    <!--============================= FOOTER =============================-->
    <footer class="main-block dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy; 2018 Listing. All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <ul>
                            <li><a href="#"><span class="ti-facebook"></span></a></li>
                            <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
                            <li><a href="#"><span class="ti-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--//END FOOTER -->




    <!-- jQuery, Bootstrap JS. -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script>
        $(".map-icon").click(function() {
            $(".map-fix").toggle();
        });
    </script>
    <script>
        // Want to customize colors? go to snazzymaps.com
        function myMap() {
            var maplat = $('#map').data('lat');
            var maplon = $('#map').data('lon');
            var mapzoom = $('#map').data('zoom');
            // Styles a map in night mode.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: maplat,
                    lng: maplon
                },
                zoom: mapzoom,
                scrollwheel: false
            });
            var marker = new google.maps.Marker({
                position: {
                    lat: maplat,
                    lng: maplon
                },
                map: map,
                title: 'We are here!'
            });
        }
    </script>
    <!-- Map JS (Please change the API key below. Read documentation for more info) -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap&key=AIzaSyDMTUkJAmi1ahsx9uCGSgmcSmqDTBF9ygg"></script>
</body>

</html>