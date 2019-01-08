<!DOCTYPE html>

<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Pages &ndash; Blank | AppUI</title>

        <meta name="description" content="AppUI - Admin Dashboard Template & UI Framework" />
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

    <body>
        <div class="app-layout-canvas">
           
                            <div class="card">
                            <div class="card-header">
                                <h4>Your Listing</h4>
                            </div>
                            <span style="float: right; padding-right: 40px;"><a href="#addnew" data-toggle="modal" class="btn btn-primary">Add New</a></span>
                            <div class="card-block">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/base_tables_datatables.js -->
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            <th class="text-center">List ID</th></tr>
                                            <tr><th>Title</th></tr>
                                            <tr><th class="hidden-xs" style="width: 20%;">Location</th></tr>
                                            <tr><th class="text-center" style="width: 20%;">Description</th></tr>
                                            <tr><th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

			<?php
				
				$conn = mysqli_connect('localhost', 'root', '', 'sms');
				$query=mysqli_query($conn,"select * from `list`");
				while($row=mysqli_fetch_array($query)){
                    ?>
					<tr>
                        <td><?php echo $row['list_id']; ?></td></tr>
                        <tr><td><?php echo $row['list_title']; ?></td></tr>
						<tr><td><?php echo $row['list_description']; ?></td></tr>
						<tr><td><?php echo $row['list_location']; ?></td></tr>
						<tr><td>
							<center><a href="#edit<?php echo $row['list_id']; ?>" data-toggle="modal" class="btn btn-warning"><i class="ion-edit"></i></a>
							<a href="#del<?php echo $row['list_id']; ?>" data-toggle="modal" class="btn btn-default"><i class="ion-close"></i></a></center>
							<?php include('list_button.php'); ?>
                            
						</td>
                    </tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
        <?php include('add_modal.php'); ?>
	</div>
</div>
            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <div class="app-ui-mask-modal"></div>

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