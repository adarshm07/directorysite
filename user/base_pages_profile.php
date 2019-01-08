<?php
session_start();
?>
<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Profile</title>

        <meta name="description" content="" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui layout-has-drawer layout-has-fixed-header">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Drawer -->
                <aside class="app-layout-drawer">

                    <!-- Drawer scroll area -->
                    <div class="app-layout-drawer-scroll">
                        <!-- Drawer logo -->
                        <div id="logo" class="drawer-header">
                            <a href="index.php"><img class="img-responsive" src="assets/img/logo/logo-backend.png" title="AppUI" alt="AppUI" /></a>
                        </div>

                        <!-- Drawer navigation -->
                        <nav class="drawer-main">
                            <ul class="nav nav-drawer">

                                <li class="nav-item nav-drawer-header">Main</li>

                                <li class="nav-item active">
                                    <a href="index.php"><i class="ion-ios-speedometer-outline"></i> Dashboard</a>
                                </li>

                                <li class="nav-item">
                                    <a href=".././index_.php"><i class="ion-ios-monitor-outline"></i> Home</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Admin</li>

                                <li><a href=".././add-listing.php"><i class="ion-ios-pen"></i> Add Listing</a></li>

                               </nav>
                        <!-- End drawer navigation -->

                        <div class="drawer-footer">
                            <p class="copyright">Thalassery Official &copy;</p>
                        </div>
                    </div>
                    <!-- End drawer scroll area -->
                </aside>
                <!-- End drawer -->

                <!-- Header -->
                <header class="app-layout-header">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <button class="pull-left hidden-lg hidden-md navbar-toggle" type="button" data-toggle="layout" data-action="sidebar_toggle">
					<span class="sr-only">Toggle drawer</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                                <span class="navbar-page-title">
					
					Profile
				</span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">

                                <ul class="nav navbar-nav navbar-right navbar-toolbar hidden-sm hidden-xs">
                                    <li class="dropdown dropdown-profile">
                                        <a href="javascript:void(0)" data-toggle="dropdown">
                                            <span class="m-r-sm">
                                            <?php
                                                 
                                                define('conString', 'mysqli:host=localhost;dbname=sms');
                                                define('dbUser', 'root');
                                                define('dbPass', '');

                                                print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname'];
                                                ?>
                                             <span class="caret"></span> <i class="ion-ios-contact-outline"></i></span> 
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="base_pages_profile.html">Profile</a>
                                            </li>
                                            <li>
                                                <a href=".././logout.php">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <div class="card card-profile">
                            <br> <br>
                            <div class="card-block card-profile-block text-xs-center text-sm-left">
                                <img class="img-avatar img-avatar-96" src="assets/img/avatars/avatar3.jpg" alt="" />
                                <div align=right>
                                    <?php
                                                print $_SESSION['user']['fname'].' '.$_SESSION['user']['lname']; echo "<br>";
                                                print $_SESSION['user']['email'];
                                                ?>
                                                </div>
                            </div>
                        </div>

                                <div class="card">
                                    <div class="card-block tab-content">
                                        <div class="tab-pane fade in active" id="profile-tab1">
                                            <form class="fieldset" method="POST" action="addnew.php">
                                                <h4 class="m-t-sm m-b">General info</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName1">First name</label>
                                                        <input type="text" class="form-control" id="exampleInputName1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputName2">Last name</label>
                                                        <input type="text" class="form-control" id="exampleInputName2" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputAddress">Email</label>
                                                    <input type="text" class="form-control" id="exampleInputAddress" />
                                                </div>

                                                <h4 class="m-t-md m-b">Change password</h4>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword1">Confirm current password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword2">Confirm new password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-6">
                                                        <label for="exampleInputPassword3">New password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword3" />
                                                    </div>
                                                </div>
                                                <div class="row narrow-gutter">
                                                    <div class="col-xs-6">
                                                        <button type="button" class="btn btn-default btn-block">Cancel</button>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <button type="submit" class="btn btn-app btn-block">Save<span class="hidden-xs"> changes</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End profile tab 1 -->
                                    </div>
                                    <!-- .card-block .tab-content -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .col-md-8 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        
        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

    </body>

</html>