<?php
        session_start();
	if(isset($_POST['log_in'])){ // redirect to Registered.php
			
			// full_name country_code mob_num Hostel/pg room_no
			$username = $_POST['user_name'];
			$password = $_POST['pswd'];
		        
		    if($username != "" && $password != ""){
			        
                                $split = explode("_",$username);
                                $_SESSION["username"] = $split[1];	
				$hostname = "localhost";
				$userid = "id1150435_hrshlmittal306";
				$pswd = "Harashmi@306";
				$database = "id1150435_laundarysystem";
				
				$connection = mysqli_connect($hostname,$userid,$pswd,$database);
				
				if(!$connection){
					die("Could not Connect to the database");
				}
				else{
					
					$username = trim($username);
					$query = "SELECT PASSWORD FROM LoginTable WHERE USERID = '$username'";
					$sql = mysqli_query($connection,$query);
					
					if(!$sql) die ("Sorry we could not fetch the data!");
					else{
							
						$result  = mysqli_fetch_assoc($sql)['PASSWORD'];
						if($result == $password){
                                                        $status = "ONLINE";
							$sql = "UPDATE LoginTable SET STATUS = '$status' WHERE USERID = '$username' ";
                                                        mysqli_query($connection,$sql) or die(mysqli_error($connection));
                                                       
							echo "<script>window.location = 'Welcome.php';</script>";
						}
						else{
							
							echo "<script>alert('Login incorrect');</script>";
						}
						
					}	
				}
					
			}
			else{
					echo "<script>alert('Enter Valid Username and Password');</script>";
			}
	}
?>


<html>
	<head>
		
		<title>Client LogIn | Laundary</title>
		<link rel = "icon" style = "image/x-icon" href = "Icon.jpeg"/>
		<meta name = "author" content = "Harshal Mittal" />
		<!--<meta http-equiv = "refresh" content = "5;url=/my_Work/Design.php">-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
	</head>
	
	<body style = "background-image:url('free-website-backgrounds1.jpg');background-repeat:no-repeat;background-size:100% 100%">
		
		<section class = "header" >
			<div class = "container">
				<div class = "page-header" >
					<div class  = "row">
						<div class = "col-md-4"><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "https://www.google.com" target = "_blank"><button type = "button" class = "w3-button w3-circle w3-blue w3-card-4 w3-xlarge"><i class = "fa fa-facebook"></i></button></a>
												&nbsp;&nbsp;&nbsp;<a href = "https://www.twitter.com" target = "_blank"><button type = "button" class = "w3-button w3-circle w3-blue w3-card-4 w3-xlarge"><i class = "fa fa-twitter"></i></button></a>
						</div>   <!-- Putting up the social media link-->
						<div class = "col-md-4"><a href = "index.html"><br/><h2 align  = "center" style = "font-family :georgian;color:#000000;font-size:40px;font-style:normal;font-weight:bolder;font-size-adjust:.8font-stetch:ultra-condensed;text-shadow:4px 7px 10px"><strong>Laundary System</strong></h2></a></div> <!-- Need Concern about the reference link -->
						<div class = "col-md-4">&nbsp;<h3><p><blockquote class = "blockquote-reverse"><span class = "glyphicon glyphicon-earphone"> <strong style = "font-size:25px">81710304033</strong></span><br/><br/><p><span class = "glyphicon glyphicon-envelope"> hrshlmittal306@gmail.com</p></span></blockquote></p></h3></div>
					</div>
				</div>
				
				<div class = "well well-md" style = "background-image:url(downlod1.jpeg);background-repeat:no-repeat:background-size:100% 100%">
					<div class  = "row">
						<div class = "col-md-1"></div>
						<div class = "col-md-1"></div>
						<div class = "col-md-1"></div>
						<div class = "col-md-1">
							<a href = "index.html"><button type = "button" class = "btn btn-danger btn-md w3-card-4" style = "width:90px;height:33px"><span class = "glyphicon glyphicon-home"></span></button></a>
						</div>
						<div class = "col-md-1">
							<a href = "" data-toggle = "tooltip" title = "Work in Progress!"><button type = "button" class = "btn btn-danger btn-md w3-card-4 disabled" style = "width:90px;">About Us</button></a>
						</div>
						<div class = "col-md-1">
							<div class = "btn-group">
									<div class = "btn-group">
										<button type = "button" class = "btn btn-Danger dropdown-toggle w3-card-4 active" style = "width:90px" data-toggle = "dropdown">LogIn As&nbsp;&nbsp;<span class = "caret"></span></button>
											<ul class = "dropdown-menu" role = "menu">
												<li><a href = "ClientLogin.php">Client</a></li>
												<li><a href = "AdminLogin.php">Admin</a></li>
											</ul> 
									</div>
							</div>
						</div>
						<div class = "col-md-1">
							<a href = "SignUp.php"><button type = "button" class = "btn btn-danger btn-md w3-card-4" style = "width:90px">SignUp</button></a>
						</div>
						<div class = "col-md-1">
							<a href = "" data-toggle = "tooltip" title = "Work in Progress!"><button type = "button" class = "btn btn-danger btn-md w3-card-4 disabled" style = "width:90px">Contact Us</button></a>
						</div>
						<div class = "col-md-4"></div>
						<div class = "col-md-1"></div>
						<div class = "col-md-1"></div>
						<div class = "col-md-1"></div>
					</div>
				</div>
			
			</div>
		</section>
		<br/><br/><br/>
		<section>
			<div class = "container">
				<div class = "row">
					<div class = "col-md-4"></div>
					<div class = "col-md-4" style = "background-color:lavender"><br/>
						<form method = "POST" action = "">
							<label for = "Full Name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UserName:</label>
							<div class = " input-group form-group form-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class = "input-group-addon"><span class = "glyphicon glyphicon-user"></span></i>&nbsp;
								<input type = "text" class = "form-control" placeholder = " UserName" value = "<?php if(isset($_POST['log_in'])) echo $username ?>" name = "user_name" style = "width:240px;font-family:georgian;<?php if($username == "") echo "border-color:red;" ?>"/>
							</div>
							<label for = "Mobile">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</label>
							<div class  = " input-group form-group form-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<i class = "input-group-addon"><span class = "glyphicon glyphicon-lock"></span></i>&nbsp;
								<input type = "Password" class = "form-control" placeholder = "Password" name = "pswd" style = "width:240px;font-family:georgian;<?php if($password == "") echo "border-color:red;" ?>"/>
							</div>
							<div class = "form-group"><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<button type = "submit" class = "btn btn-success w3-card-4" name = "log_in" style = "width:120px" >LogIn</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<br/><br/><br/><br/><br/><br/>
		<!--footer-->
		<footer class  = "footer">
			<div class = "container-fluid" style = "background-color:black"><br/><br/>
				<p align = "center">Design and Developed By <br/><a href = "https://twitter.com/Harshal306" >Harshal Mittal</a> <br/>(B-Tech in Computer Science Stream with specialization in Open source and Open standards)</p>
			</div>
		</footer>
	</body>
</html>
