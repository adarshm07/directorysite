<?php
require_once 'user.php';
require_once 'conn.php';
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
        <title>Dashboard</title>

        <meta name="description" content="Dashboard" />
        <meta name="author" content="rustheme" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css" />
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css" />

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

                                <li class="nav-item">
                                    <a href="./list/index.php"><i class="ion-ios-monitor-outline"></i> List</a>
                                </li>

                                <li class="nav-item nav-drawer-header">Admin</li>

                                <li><a href=".././listing-row.php"><i class="ion-ios-pen"></i> Add Listing</a></li>

                            </ul>
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
					
					Dashboard
				</span>
                            </div>

                            <div class="collapse navbar-collapse" id="header-navbar-collapse">
                                <!-- Header search form -->
                                <form class="navbar-form navbar-left app-search-form" role="search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="search" id="search-input" placeholder="Search..." />
                                            <span class="input-group-btn">
								<button class="btn" type="button"><i class="ion-ios-search-strong"></i></button>
							</span>
                                        </div>
                                    </div>
                                </form>
                                <!-- .navbar-left -->

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
                                                <a href="base_pages_profile.php">Profile</a>
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
                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Total Registered</p>
                                            <p class="h3 m-t-sm m-b-0">
                                                <?php
                                                $connection = mysqli_connect('localhost', 'root', '', 'sms');
                                                $result = mysqli_query($connection, "SELECT  COUNT(*) as count FROM users where user_role='1'");
                                                while ($row = mysqli_fetch_array($result)) {
                                                $var = $row['count'];
                                                echo $var. "";
                                                } ?> </p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                            
            
                                            <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">Admin</p>
                                            <p class="h3 m-t-sm m-b-0">
                                                <?php
                                                $connection = mysqli_connect('localhost', 'root', '', 'sms');
                                                $result = mysqli_query($connection, "SELECT  COUNT(*) as count FROM users where user_role='2'");
                                                while ($row = mysqli_fetch_array($result)) {
                                                $var = $row['count'];
                                                echo $var. "";
                                                } ?> </p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                                            <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <a class="card" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                        <p class="h6 text-muted m-t-0 m-b-xs">List</p>
                                            <p class="h3 m-t-sm m-b-0">
                                                <?php
                                                $connection = mysqli_connect('localhost', 'root', '', 'sms');
                                                $result = mysqli_query($connection, "SELECT  COUNT(*) as count FROM list");
                                                while ($row = mysqli_fetch_array($result)) {
                                                $var = $row['count'];
                                                echo $var. "";
                                                } ?> </p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-blue bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                            </div>
                                            <div class="card">
                            <div class="card-header">
                                <h4>Your Listing</h4>
                            </div>
                            <div class="card-block">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center">List ID</th>
                                            <th>Title</th>
                                            <th class="hidden-xs" style="width: 20%;">Description</th>
                                            <th class="text-center" style="width: 20%;">Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                    
                                                <?php
                                                $conn = mysqli_connect('localhost', 'root', '', 'sms');
                                                $query=mysqli_query($conn,"select * from `list`");
                                                while($row=mysqli_fetch_array($query)){
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['list_title']; ?></td>
                                                        <td><?php echo $row['list_description']; ?></td>
                                                        <td>
                                                        <form action='index_approve.php' name='approve' method='post'>
                                                        
                                                        <select name='approve' class="form-control margin-bottom-10">
                                                            <option value=''><?php echo $row['approve']; ?></option>
                                                            <option name='approve' value='Approved'>Approved</option>
                                                            <option name='approve' value='Pending'>Pending</option>
                                                            <option name='approve' value='Declined'>Declined</option>
                                                </select>
                                                        </td>
                                                        <th><input class="btn btn-success" style="float: right;" type="submit" name="submit" value="Submit" /></th>
                                                            </form>
                                                    </tr>
                                                    <?php
                                                }
                                            ?>
                                            </tbody>
                                        </table>

        <div class="app-ui-mask-modal">
        </div>
        <!-- End Apps Modal -->
           
        </div>
        </div>

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

        <!-- Page Plugins -->
        <script src="assets/js/plugins/slick/slick.min.js"></script>
        <script src="assets/js/plugins/chartjs/Chart.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/js/plugins/flot/jquery.flot.resize.min.js"></script>

        <script src="assets/js/pages/base_tables_datatables.js"></script>
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- Page JS Code -->
        <script src="assets/js/pages/index.js"></script>
        <script>
            $(function()
            {
                // Init page helpers (Slick Slider plugin)
                App.initHelpers('slick');
            });
        </script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php
//Establishing Connection with Server
$connection = mysqli_connect("localhost", "root", "");
//Selecting Database from Server
$db = mysqli_select_db($connection, "sms");
if(isset($_POST['submit'])){

//Fetching variables of the form which travels in URL
$id = isset($_GET['id']) ? $_GET['id'] : '';
$approve = isset($_GET['approve']) ? $_GET['approve'] : '';
if($approve != ''){
//Insert Query of SQL
$query = mysqli_query($connection, "update list set approve = '$approve'");
echo "<div class='container'>
<div class='alert alert-info' style='padding: 20px; margin: 20px;'>
<span>Updated.</span> 
      </div>
</div>";
}
else{
echo "<div class='container'> 
<div class='alert alert-info' style='padding: 20px; margin: 20px;'><p>Insertion Failed, Some Fields are Blank.</p>
</div>
</div>";
}

}
//Closing Connection with Server
mysqli_close($connection);
?>
    </body>

</html>