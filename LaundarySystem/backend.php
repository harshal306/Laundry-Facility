<?php

	$servername = "localhost";
	$username = "id1025141_hrshlmittal306";
	$password = "Harashmi@306";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	
	
	$sql = "Insert into Information values ('2' ,'Arpit Ahlawat','90');";
	
	
	
	mysqli_close($conn);
	
	echo "<script>
				window.location = 'https://www.google.com'
		  </script>
	";

?>
