
<?php include ('header.php');
	session_start();
	if ( isset( $_COOKIE[session_name()] ) )
	setcookie( session_name(), "", time()-3600, "/" );
	//clear session from globals
	$_SESSION = array();
	//clear session from disk
	session_destroy();
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
							
						</div>
					</div>
					<div class="carousel-item"><img src="img/image4.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px -10px 10px #000;font-weight: bold">CONNECT YOUR PALS</h2>
							<h3>Have a wonderful exeperience with us</h3>
							
						</div>
					</div>
					<div class="carousel-item"><img src="img/image9.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px -10px 10px #000;font-weight: bold">CONNECT SCHOOMATE</h2>
							<h3>Have a wonderful exeperience with us</h3>
							
						</div>
					</div>
					<div class="carousel-item"><img src="img/image1.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">REACH AFRICA</h2>
							<h3>Have a wonderful exeperience with us</h3>
							
						</div>
					</div>
					<div class="carousel-item"><img src="img/image4.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h2 class="display-3" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">AFFORDABLE</h2>
							<h3>Have a wonderful exeperience with us</h3>
							
						</div>
					</div>
					<div class="carousel-item"><img src="img/image2.jpg" width="100%"  height="400px" >
						<div class="carousel-caption" style="margin-bottom: 60px;">
							<h1 class="display-2" style="color: white;text-shadow: 10px 10px 10px #000;font-weight: bold">EFFECTIVE</h1>
							<h3>Have a wonderful exeperience with us</h3>
		
								</div>
					</div>
				</div>
			</div>


				<div class="main" id="main">
					
						<form action="loginprocess.php" method="POST">  
							
									<center id="section" class="form-group">	
										<h3 id="head" class="">Login</h3>
								

									<label id="label">Email</label> 
									<span>	<input class="form-control" type="email" name="email" required=""></span>
								
									<label id="label1">Password</label> 
									<span>	<input class="form-control" type="password" name="password" required=""></span>
								
								<button  type="submit" id="button" class="btn btn-primary" name="login">Login</button>

								<a href="register.php"><button type="button"  class="btn btn-primary ">Register</button></a>
								</center>
							
						</form>

<!--
								 <div  class="modal fade" id="myModal">
					             	<div class="modal-dialog">
					             		<div class="modal-content">
					  
					             			<div class="modal-header" style="background-color: #052146;color: white">
					             				<h4 class="modal-tittle">
														Register now
					             				</h4>
					             				<button type="button" style="color: white" class="close" data-dismiss="modal">&times;</button>
					             				
					             			</div>
					             			<div class="modal-body">

					             				<form class="form-group"  name="frmpatlogin" action="" method="POST" onsubmit="return validateForm()">  
									        <tr>
									        	<td><span style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">First Name</span> <input class="form-control" type="text" name="fname"></td>
									        </tr>

									        <tr>
									        	<td><span style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">Last Name</span> <input class="form-control" type="text" name="lname"></td>
									        </tr>


									        <tr>
									        	<td><span  style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">Email</span> <input class="form-control" type="text" name="email"></td>
									        </tr>

									       
									        <tr>
									        	<td>
									        		<span style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">Gender</span> <select class="form-control" name="gender"><option>select</option>
									        			<option>Male</option>
									        			<option>Female</option>
									        		</select>
									        	</td>
									        </tr>	

									        <tr>
									        	<td><span style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">Phone number</span> <input class="form-control" type="number" name="pnum"></td>
									        </tr>

									        <tr>
									        	<td><span style="padding-left: 45px;font-size: 18px;
													font-weight: bold;">Password</span> <input class="form-control" type="Password" name="pwd"></td>
									        </tr><br>

									        <tr>
									       		<td><center><button class="form-control btn btn-primary" type="submit" name="submit">Submit</button></center></td>
									        </tr>
									    </form>

									      </div>
									  
										 
					             			
					             		</div>
					             		
					             	</div>

				</div>	\\-->


	</div>

				<div id="headerSection2" class="mb-1" style="height: 40px;"><h1 class="text-white text-center pt-2" style="font-size: 18px;font-family:CASTELLAR,edwadian script ITC,arial;">copy-right 2019</h1></div>

			<!--<script type="application/javascript">
				var alphaExp = /^[a-zA-Z]+$/; //variable to validate only alphabets
				var alphaspaceExp = /^[a-zA-Z]+$/; //variable to validate only alphabet and space
				var numericExpression = /^[0-9]+$/; // variable to validate only number
				var alphanumericExp = /^[0-9a-zA-Z]+$/; // variable to validate numbers and alphabet
				var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/; //variable to validate Email ID

				function validateform(){
					alert("Name should not be empty");
					document.frmpatlogin.fname.focus();
					return false;
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
			margin:auto 25%;
			padding:20px;
			border-radius: 10px;
			
		}
		#label{
			margin-right: 69%;
			font-size: 20px;
			font-weight: bold;
			color: white;
		}
		#label1{
			margin-right: 62%;
			font-size: 20px;
			font-weight: bold;
			color: white;
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
	#button a{
		list-style: none;
		text-decoration: none;
	}

	</style>

</body>
</html>