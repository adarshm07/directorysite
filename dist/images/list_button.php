<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['list_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from list where list_id='".$row['list_id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Title: <strong><?php echo $drow['list_title']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="list_delete.php?id=<?php echo $row['list_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
 
            </div>
        </div>
    </div>
<!-- /.modal -->
 
<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['list_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from list where list_id='".$row['list_id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="list_edit.php?id=<?php echo $erow['list_id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Title:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="list_title" class="form-control" value="<?php echo $erow['list_title']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Location:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="list_location" class="form-control" value="<?php echo $erow['list_location']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Description:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="list_description" class="form-control" value="<?php echo $erow['list_description']; ?>">
						</div>
					</div>
                </div> 
				</div>
				<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tagline:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="list_tagline" class="form-control" value="<?php echo $erow['list_tagline']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="list_number" class="form-control" value="<?php echo $erow['list_number']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Cname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="cname" class="form-control" value="<?php echo $erow['cname']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Approve:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="approve" class="form-control" value="<?php echo $erow['approve']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->