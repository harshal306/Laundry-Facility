<html>
	<head>
		
		<title>Welcome User</title>      <!--Php to make user room number avaiable-->
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
				<div class = "page-header">
					<div class  = "row">
						<div class = "col-md-4"><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "https://www.google.com" target = "_blank"><button type = "button" class = "w3-button w3-circle w3-blue w3-card-4 w3-xlarge"><i class = "fa fa-facebook"></i></button></a>
												&nbsp;&nbsp;&nbsp;<a href = "https://www.twitter.com" target = "_blank"><button type = "button" class = "w3-button w3-circle w3-blue w3-card-4 w3-xlarge"><i class = "fa fa-twitter"></i></button></a>
						</div>   <!-- Putting up the social media link-->
						<div class = "col-md-4"><a href = "index.html"><br/><h2 align  = "center" style = "font-family :georgian;color:#000000;font-size:40px;font-style:normal;font-weight:bolder;font-size-adjust:.8font-stetch:ultra-condensed;text-shadow:4px 7px 10px"><strong>Laundary System</strong></h2></a></div> <!-- Need Concern about the reference link -->
						<div class = "col-md-4">&nbsp;<h3><p><blockquote class = "blockquote-reverse"><span class = "glyphicon glyphicon-earphone"> <strong style = "font-size:25px">81710304033</strong></span><br/><br/><p><span class = "glyphicon glyphicon-envelope"> hrshlmittal306@gmail.com</p></span></blockquote></p></h3></div>
					</div>
				</div>
				
				<section>
					<div class = "container" align = "center">
						<div class = "row">
							<div class =  "col-sm-4"></div>
							<div class =  "col-sm-4">
								<div class = "btn-group">
									<button class = "btn btn-primary btn-md dropdown-toggle w3-card-4" style = "width:210px;height:45px" data-toggle = "dropdown"><img src = "User.jpeg" class = "img-rounded" width = "30px" /> Welcome Room_no <?php session_start(); echo $_SESSION["username"]; ?> <span class = "caret"></span></button> <!--Php to make user room number avaiable-->
									<ul class = "dropdown-menu dropdown-menu-down" role = "menu">
												<li class = "disabled"><a href = "Contact.php">Conatct Us</a></li>
												<li class  = "disabled"><a href = "About.php">About us</a></li>
                                                                                                <li class = "divider"></li>
                                                                                                <li class = "disabled"><a href = "settings.php">Account Setting</a></li>
												<li class = "divider"></li>
												<li><a href = "tempredirection.php"><span class = "glyphicon glyphicon-off"></span> Log Out</a></li>
									</ul>
								</div>
							</div>
							<div class =  "col-sm-4"></div>
						</div>
					</div>
				</section>
				
				<br/><br/><br/><br/>
				<section>
					<div class = "container-fluid">
						<div class = "row">
							<div class = "col-sm-6" style = "background-image:url(Images.jpeg)"><br/>
								<div class = "thumbnail" align = "center" style = "background-image:url('Wash.jpeg');">
									<a href = "givelaundry.php"><br/>
										<img src = "Wash.jpeg" class = "img-thumbnail"/>
									</a>
								</div>
								<div class = "caption" align = "center">
											<h4 style = "font-size:26px;align:center;text-shadow:4px 4px 8px">Get Washed</h4>
								</div>
							</div>
							<div class = "col-sm-6" style = "background-image:url('Images.jpeg')"><br/>
								<div class = "thumbnail" align = "center" style = "background-image:url('History.jpeg');">
									<a href = "history.php" ><br/>
										<img src = "History.jpeg" class = "img-thumbnail"/>
									</a>
								</div>
								<div class = "caption" align = "center">
									<h4 style = "font-size:26px;text-shadow:4px 4px 8px;">Check Status</h4>
								</div>
							</div>
						</div>
					</div>
				</section>
			
			</div>
		</section>
		
		<br/><br/><br/><br/><br/><br/><br/>
		<!--footer-->
		<footer class  = "footer">
			<div class = "container-fluid" style = "background-color:black"><br/><br/>
				<p align = "center">Design and Developed By <br/><a href = "https://twitter.com/Harshal306" >Harshal Mittal</a> <br/>(B-Tech in Computer Science Stream with specialization in Open source and Open standards)</p>
			</div>
		</footer>
	</body>
</html>
