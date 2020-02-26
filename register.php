<?php
include 'connect.php';
 include ('header.php'); 

 session_start();
 $error ='';
 $success ='';
	
?>

			<!--  slider -->
			<div id="slides" class="carousel slide" data-ride="carousel">
				<ul class="carousel-indicators">
					<li data-target="#slides" data-slide-to="0" class="active"></li>
					<li data-target="#slides" data-slide-to="1"></li>
					<li data-target="#slides" data-slide-to="2"></li>
					<li data-target="#slides" data-slide-to="3"></li>
					<li data-target="#slides" data-slide-to="4"></li>
					<li data-target="#slides" data-slide-to="5"></li>
				</ul>
				<div class="carousel-inner">
					<div class="carousel-item active"><img src="img/image7.jpg"  width="100%" height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h1 class="display-3" style="color: white;font-weight: bold;text-shadow: 10px -10px 10px #000; padding-bottom:;border:1px solid white;font">REACH THE WORLD</h1>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
					<div class="carousel-item"><img src="img/image4.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px -10px 10px #000;font-weight: bold">CONNECT YOUR PALS</h2>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
					<div class="carousel-item"><img src="img/image9.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px -10px 10px #000;font-weight: bold">CONNECT SCHOOMATE</h2>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
					<div class="carousel-item"><img src="img/image1.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">REACH AFRICA</h2>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
					<div class="carousel-item"><img src="img/image4.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">AFFORDABLE</h2>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
					<div class="carousel-item"><img src="img/image2.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h1 class="display-2" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">EFFECTIVE</h1>
							<h3>Have a wonderful exeperience with us</h3>
							<button type="button" class="btn btn-outline-light btn-lg"   data-toggle="modal" data-target="#myModal" id="reg_modal" id="myModal">REGISTER NOW</button>
						</div>
					</div>
				</div>
			</div>


				<div class="main" id="main" style="background:#f9fbfc;">
					
						<div> 
							<p class="error"><?php echo $error; ?></p><p class="success"><?php echo $success; ?></p>
									<center>  <form id="section" name="myForm" action="Homepage.inc.php" method="POST"  class="form-group" onsubmit="return validateform()">	

									<h3 id="head" class="">Register</h3>
							

									<label id="label1">First Name</label> 
									<span>	<input class="form-control" type="text" name="fname" required=""></span>
								
									<label id="label1">Last Name</label> 
									<span>	<input class="form-control" type="text" name="lname" required=""></span>

									<label id="label1">Email</label> 
									<span>	<input class="form-control" type="text" name="email" required=""></span>
								
									<label id="label1">Gender</label> 
									<select class="form-control" name="gender" required="">
										<option>--Gender--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										
									</select>
								
									<label id="label1">Phone No.</label> 
									<span>	<input class="form-control" type="number" name="pnum" required=""></span>

									<label id="label1">Password</label> 
									<span>	<input class="form-control" type="password" name="snum" required=""></span>
								
									
								
								<button  class="btn btn-primary mt-2" name="signup"   style=" width: 20%; font-size: 20px;"> Submit</button>
							</form>
								</center>
							
						</div>

								

	</div>

		


<!--
			<script type="application/javascript">
				var alphaExp = /^[a-zA-Z]+$/; //variable to validate only alphabets
				var alphaspaceExp = /^[a-zA-Z]+$/; //variable to validate only alphabet and space
				var numericExpression = /^[0-9]+$/; // variable to validate only number
				var alphanumericExp = /^[0-9a-zA-Z]+$/; // variable to validate numbers and alphabet
				var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/; //variable to validate Email ID

				function validateform(){
					if (document.myForm.fname.value == "") {

							alert("Finfo was created successfully);
							document.myForm.fname.focus();
				
					return false;
					}else if(!document.myForm.fname.value. match(alphaspaceExp)){

						alert("First Name not valid");
						document.myForm.fname.focus();
						return false;

					}else if(document.myForm.lname.value == "") {

							alert("Linfo was created successfully");
				
					return false;
					}else if(!document.myForm.lname.value. match(alphaspaceExp)){

						alert("Last Name not valid");
						document.myForm.fname.focus();
						return false;
					}else if(document.myForm.email.value == ""){

						alert("Email should not be empty");
							document.myForm.email.focus();
				
					return false;

					}else if(!document.myForm.email.value.match(emailExp)){

						alert("Email not valid");
							document.myForm.email.focus();
				
					return false;
					}else if(document.myForm.gender.value == ""){

						alert("Kindly select Gender");
							document.myForm.gender.focus();
				
					return false;
					}else if(document.myForm.Pwd.value == ""){

						alert("Password should not be empty");
							document.myForm.Pwd.focus();
				
					return false;
					}
					else if(document.myForm.pnum.value == ""){

						alert("Phone Number empty");
							document.myForm.pnum.focus();
				
							return false;
					}else if(!document.myForm.pnum.value.match(numericExpression)){s
						alert("Phone number not valid");
							document.myForm.fname.focus();
				
					return false;
					}
				}
				
			</script>-->
	<style type="">
		#bar li{
			
			margin-right: 30px;
		}
		#head{
			background-color: #052146;
			font-size: 35px;
			color: white;
			padding: 10px;
			font-weight: bold;
			border-radius: 10px;
			border:1px solid white;
		}
		#main{
			margin:20px;

		}
		#section{
			background-color: #052146;
			text-align: center;
			min-width: 100px;
			padding:20px;
			border-radius: 10px;
			
		}
		#label{
			padding-left: 20px;
		}
		#label1{
			float: left;
			padding-left: 50px
		}
		.form-control{
			width: 80%;
			margin: auto;
			height: 40px;

		}
		#button{
			margin-right: 10px;
			margin: 10px;
		}
		.btn:hover{
			background-color:#052146;
			color: white;
		}
		#headerSection2{
		font-size: 30px;
		background-color:#052146;
		color: #052146;
		margin-top: 100px;
	}
	.form-group td span{
		margin-right:100px; 
		
	}

	</style>
 <?php include 'footer.php' ?>
</body>
</html>