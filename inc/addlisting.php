<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listing</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
<!-- Preloader -->
<div id="preloader"></div>
        <!-- Static navbar -->
        <nav class="navbar-fixed-top navbar-default">
                <div class="container-fluid" >
                  <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                    <a class="navbar-brand" href="./">Ty<div id="background"></div>
                  </a>
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="./">Home</a></li>
                    <li class=""><a href="./about.html">About</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                        <li><a href="./add-listing.html">Add Listing</a></li>
                        <li><a href="how-work.html">How it work</a></li>
                  </ul>
                </div>
                </div>
              </nav>

        <div class="page-bread mb70">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>submit listing</h3>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 mb30">
                    <div class="mb40">
                        <h2 class="left-title">Description</h2>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Listing Description" rows="8"></textarea><div class="textarea-resize"></div>
                        </div>
                    </div><!--/-->
                    <div class="mb40">
                        <h2 class="left-title">Listing Location</h2>
                        <div class="mb15">
                            <input id="pac-input" class="controls form-control map-search-box" type="text" placeholder="Enter a location">

                            <div id="map-canvas"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="email" class="form-control" placeholder="Latitude">
                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-map-marker"></i>
                                    <input type="email" class="form-control" placeholder="Longitude">
                                </div>
                            </div>
                        </div>
                    </div><!--/-->
                    <div class="mb40">
                        <h2 class="left-title">Attributes</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="property" class="form-control">
                                        <option>Property Type</option>
                                        <option>Apartment</option>
                                        <option>Condo</option>
                                        <option>House</option>
                                        <option>Villa</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <select name="contract" class="form-control">
                                        <option>Contract</option>
                                        <option>Rent</option>
                                        <option>Sale</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="location" class="form-control">
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>Paris</option>
                                        <option>Japan</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-dollar"></i>
                                    <input type="email" class="form-control" placeholder="Min Price">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-home"></i>
                                    <input type="email" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-location-arrow"></i>
                                    <input type="email" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group-icon mb15">
                                    <i class="fa fa-phone"></i>
                                    <input type="email" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb40">
                        <h2 class="left-title">Add Photos</h2>
                        <form id="my-awesome-dropzone" action="add-listing.html" class="dropzone"></form>
                    </div><!--/-->
                    <div class="text-right mb40">
                        <a href="#" class="btn btn-lg btn-primary">Submit Listing</a>
                    </div>
                </div><!--/col-->
                <div class="col-md-3">
                    <h4 class="left-title mb20">Search Filter</h4>
                    <div class="mb40">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Keywords...">
                            </div>
                            <div class="form-group mb15">
                                <select class="form-control" title="Location">                                       
                                    <option>Paris</option>
                                    <option>London</option>
                                    <option>New York</option>
                                    <option>Tokyo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" title="Category">                                       
                                    <option>Restaurants</option>
                                    <option>Jobs</option>
                                    <option>Property</option>
                                    <option>Automotive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Min Price...">
                            </div>
                            <input type="submit" class="btn btn-dark btn-lg btn-block" value="Search">
                        </form>
                    </div>
                    <h4 class="left-title mb20">Recent Listings</h4>
                    <ul  class="list-unstyled recent-item-card mb40">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="images/img1.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4><a href="#">Doloremque laudantium, totam rem aperiam</a></h4>
                                <em>New York / Coffee</em>
                                <span class="text-primary">$140/Person</span>
                            </div>
                        </li><!--/li-->
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="images/img2.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4><a href="#">Doloremque laudantium, totam rem aperiam</a></h4>
                                <em>New York / Coffee</em>
                                <span class="text-primary">$140/Person</span>
                            </div>
                        </li><!--/li-->
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img src="images/img3.jpg" alt="" class="img-responsive" width="90">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4><a href="#">Doloremque laudantium, totam rem aperiam</a></h4>
                                <em>New York / Coffee</em>
                                <span class="text-primary">$140/Person</span>
                            </div>
                        </li><!--/li-->
                    </ul><!--/ul-->
                    <h4 class="left-title mb20">Popular Tags</h4>
                    <ul class="list-inline tags-list">
                        <li><a href="#"><i class="fa fa-tag"></i> Shop</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Beer</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Beach</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Cinemas</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Hotel</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Dinner</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Lunch</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Taxi</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Bar & pubs</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Games</a></li>
                        <li><a href="#"><i class="fa fa-tag"></i> Tickets</a></li>
                    </ul>
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

        <script src="js/plugins/all.js"></script>
        <script src="js/finder.custom.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8VMR9FooFZN64_qR8pu0jY0NJ8j_sicE&libraries=places&callback=initAutocomplete"
        async defer></script>
        <script>
           
            
            //google-map-location-finder
            function initAutocomplete() {
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    center: {lat: 26.981942, lng: 75.684486},
                    zoom: 13,
                    mapTypeId: 'roadmap'
                });

                // Create the search box and link it to the UI element.
                var input = document.getElementById('pac-input');
                var searchBox = new google.maps.places.SearchBox(input);
                map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

                // Bias the SearchBox results towards current map's viewport.
                map.addListener('bounds_changed', function () {
                    searchBox.setBounds(map.getBounds());
                });

                var markers = [];
                // Listen for the event fired when the user selects a prediction and retrieve
                // more details for that place.
                searchBox.addListener('places_changed', function () {
                    var places = searchBox.getPlaces();

                    if (places.length == 0) {
                        return;
                    }

                    // Clear out the old markers.
                    markers.forEach(function (marker) {
                        marker.setMap(null);
                    });
                    markers = [];

                    // For each place, get the icon, name and location.
                    var bounds = new google.maps.LatLngBounds();
                    places.forEach(function (place) {
                        if (!place.geometry) {
                            console.log("Returned place contains no geometry");
                            return;
                        }
                        var icon = {
                            url: place.icon,
                            size: new google.maps.Size(71, 71),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(17, 34),
                            scaledSize: new google.maps.Size(25, 25)
                        };

                        // Create a marker for each place.
                        markers.push(new google.maps.Marker({
                            map: map,
                            icon: icon,
                            title: place.name,
                            position: place.geometry.location
                        }));

                        if (place.geometry.viewport) {
                            // Only geocodes have viewport.
                            bounds.union(place.geometry.viewport);
                        } else {
                            bounds.extend(place.geometry.location);
                        }
                    });
                    map.fitBounds(bounds);
                });
            }

        </script>

    </body>
</html>