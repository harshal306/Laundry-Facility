<html>
	
	<body>

<?php
	 if(isset($_POST['sign_up']) == "submit"){
		 
		 
			$email = $_POST['email'];
			$username = $_POST['user_name'];
			
			if($email != "" && $username != ""){
				echo "
					<script>
						window.location('https://google.com');
					</script>
					
				";
				
			}
			
			else {
				echo "
					<script>
						alert('please fill all the required fields');
						email.style.borderColor = '#ff0000';
					</script>
				";
				}
		 
		 }
	

?>


<form action="" method="post" name="form">
<input type="text" placeholder="Your email*" name="email" id = "email" value = "<?php if(isset($_POST['sign_up']))echo $email?>" >
<input type="text" placeholder="Your name*" name="user_name" />
<button type="submit" name = "sign_up" value = "submit">Sign Up</button>



</form>

</body>
</html>
