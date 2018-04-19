<?php  

	$conn = mysqli_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysqli_select_db($conn,"biddingsystemdb");
?>