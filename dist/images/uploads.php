<?php

// check for form request method
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// check for uploaded file
	if(isset($_FILES['upload']))
	{
		// file name, type, size, temporary name
		$file_name = $_FILES['upload']['name'];
		$file_type = $_FILES['upload']['type'];
		$file_tmp_name = $_FILES['upload']['tmp_name'];
		$file_size = $_FILES['upload']['size'];
 
		// target directory
		$target_dir = "uploads/";
	
		// uploding file
		if(move_uploaded_file($file_tmp_name,$target_dir.$file_name))
		{
			// connect to database
			$cdb = mysqli_connect('localhost','root','','sms') or die("Sorry could not connect to database");
			
			// query
			$q = 'INSERT INTO user(images) VALUES("'.$target_dir.$file_name.'")';
			
			// run query
			$r = mysqli_query($cdb,$q);
			
			if(mysqli_affected_rows($cdb) == 1)
			{
				echo "<p style='color:green'><b>File has been successfully uploaded</b></p>";
			}
			else
			{
			echo "<p>A system error has been occured</p>".mysqli_error($cdb);
			}
		}
		else
		{
			echo "File can not be uploaded";
		}
	}
}