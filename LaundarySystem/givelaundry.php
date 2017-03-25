<html>
	<head>
		
		<title>Get Washed</title>
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
	
	<body style = "background-image:url('free-website-backgrounds1.jpg');background-repeat:no-repeat;background-size:100% 100%" data-spy="scroll" data-target=".navbar" data-offset="50">
		
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
			</div>
		</section>
		
		
		
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
		
		<br/><br/><br/>
		
		<?php
			// Have to make three web page for  either having 3 roommate or 2 roommate or a single person living.
		?>
		
		<div class="container">
			<div class = "row">
				<div class = "col-sm-4"></div>
				<div class = "col-md-9">
					<h2 style = "color:#812735;font-family:georgian;text-shadow:4px 4px 8px">Put Your Clothes -</h2><br/>
					<ul class="nav nav-tabs">
						<li class="active" style = "font-size:20px"><a data-toggle="tab" href="#home">Home</a></li>
						<?php
										$hostname = "localhost";
										$userid = "id1150435_hrshlmittal306";
										$pswd = "Harashmi@306";
										$database = "id1150435_laundarysystem";
										
										$conn = mysqli_connect($hostname,$userid,$pswd,$database) or die(mysqli_error());
										$room = $_SESSION['username'];
										$query = "SELECT `FULLNAME` FROM `CLIENT` WHERE `ROOM NO` = $room ";
										$update = mysqli_query($conn,$query) or die (mysqli_error());
										$row = mysqli_num_rows($update);
										
										if($row > 0){
											while($data = mysqli_fetch_assoc($update)){
														static $i = 0;
										                $fname[$i] = explode(" ",$data['FULLNAME']);
												echo "<li style = 'font-size:20px'><a data-toggle = 'tab' href = "."#menu$i >".$fname[$i][0].'\'s Laundry'."</a></li>";$i++;
											}
										}
                                        else echo "nothing found";
						?>
			
					</ul>
				</div>
				<div class = "col-md-4"></div>
			</div>
				
		
			
			<div class = "tab-content">
				<div id ="home"  class="tab-pane fade in active">
					<br/>
					
					<div >
						<h1 style = "text-shadow:2px 2px 6px">Welcome!<br/>&nbsp;&nbsp;<small>
                                                     <?php
                                                                                $query = "SELECT `FULLNAME` FROM `CLIENT` WHERE `ROOM NO` = $room ";
										$update = mysqli_query($conn,$query) or die (mysqli_error());
										$row = mysqli_num_rows($update);
										
										if($row > 0){
                                                                                        echo "Mr. ";
											while($data = mysqli_fetch_assoc($update)){
														static $j = 0;
										                $fname[$j] = explode(" ",$data['FULLNAME']);
                                                                                                if($j < $row-1) echo $fname[$j][0].", ";
                                                                                                else echo $fname[$j][0];
                                                                                                $j++;
											}
                                                                                        echo ".";
										}
                                        else echo "nothing found";
						?>
                                                </small></h1><br/><br/>
					    <p style = "font-size:15px;">Tranverse Respective above given tab to submit your clothes.</p>
					</div>
				
				</div>
			
				<?php
                            $query = "SELECT `FULLNAME` FROM `CLIENT` WHERE `ROOM NO` = $room ";
							$update = mysqli_query($conn,$query) or die (mysqli_error());
							$row = mysqli_num_rows($update);
										
							if($row > 0){
                                        
                                        while($data = mysqli_fetch_assoc($update)){
												static $k = 0;
										        $fname[$k] = explode(" ",$data['FULLNAME']);
                                                
                                                echo "<div id= 'menu$k'  class = 'tab-pane fade'><br/>
													  <h1 align = 'center' style = 'text-shadow:2px 2px 6px'>Welcome ".$fname[$k][0]."!"."</h1><br/>	
													  </div>";
                                                
                                                $k++;
											}
                                          
										}
                                        else echo "nothing found";
						?>
			</div>
		</div>
		
		
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<!--footer-->
		<footer class  = "footer">
			<div class = "container-fluid fixed" style = "background-color:black"><br/><br/>
				<p align = "center">Design and Developed By <br/><a href = "https://twitter.com/Harshal306" >Harshal Mittal</a> <br/>(B-Tech in Computer Science Stream with specialization in Open source and Open standards)</p>
			</div>
		</footer>
	</body>
</html>
