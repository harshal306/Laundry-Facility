<?php
	session_start();
	$status = "OFFLINE";
        $name = "scholars";
        $username = $name."_".$_SESSION['username'];
	$conn = mysqli_connect("localhost","id1150435_hrshlmittal306","Harashmi@306","id1150435_laundarysystem");
	$query = "UPDATE LoginTable SET STATUS = '$status' WHERE USERID = '$username' ";
	mysqli_query($conn ,$query) or die(mysqli_error());
	
	echo "<script>alert('Successfully Logout!!');window.location = 'index.html';</script>"

?>
