<?php
include 'connect.php';
 include ('header2.php'); 
 session_start();
	
?>

		


				<div class="main" id="main">
					
						<div> 
							
									<center>  <form id="section" name="myForm" action="account.inc.php" method="POST"  class="form-group" onsubmit="return validateform()">	

									<h3 id="head" class="">Update Detail</h3>
							

									<label id="label1">First Name</label>
									 <span>	<input class="form-control" type="text" name="fname"  value="<?= $_SESSION['fname'] ?>"></span>
								
									<label id="label1">Last Name</label> 
									<span>	<input class="form-control" type="text" name="lname"  value="<?= $_SESSION['lname'] ?>"></span>

									<label id="label1">Email</label> 
									<span>	<input class="form-control" type="text" name="email"  value="<?= $_SESSION['email'] ?>"></span>
								
									<label id="label1">Gender</label> 
									<select class="form-control" name="gender"  value="<?= $_SESSION['gender'] ?>">
										<option>--Gender--</option>
										<option value="Male" selected="<?= $_SESSION['gender'] == 'Male'?>">Male</option>
										<option value="Female" selected="<?= $_SESSION['gender'] == 'Female'?>">Female</option>
										
									</select>
								
									<label id="label1">Phone Number</label> 
									<span>	<input class="form-control" type="number" name="pnum"  value="<?= $_SESSION['pnum'] ?>"></span>

									<label id="label1">Password</label> 
									<span>	<input class="form-control" type="password" name="num" ></span>
								
									
								
								<button  class="btn btn-primary mt-2" id="buttonup" type="submit" name="update"   style=" width: 25%; font-size: 20px;"> Update</button>
							</form>
								</center>
							
						</div>

								

	</div>

				<div id="headerSection2" class="mb-1" style="height: 40px;"><h1 class="text-white text-center pt-2" style="font-size: 18px;font-family:CASTELLAR,edwadian script ITC,arial;">copy-right 2019</h1></div>


<!--<script type="application/javascript">
				var alphaExp = /^[a-zA-Z]+$/; //variable to validate only alphabets
				var alphaspaceExp = /^[a-zA-Z]+$/; //variable to validate only alphabet and space
				var numericExpression = /^[0-9]+$/; // variable to validate only number
				var alphanumericExp = /^[0-9a-zA-Z]+$/; // variable to validate numbers and alphabet
				var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-Z0-9]{2,4}$/; //variable to validate Email ID

				function validateform(){
					if (document.myForm.fname.value == "") {

							alert("First Name should not be empty");
							document.myForm.fname.focus();
				
					return false;
					}else if(!document.myForm.fname.value. match(alphaspaceExp)){

						alert("First Name not valid");
						document.myForm.fname.focus();
						return false;

					}else if(document.myForm.lname.value == "") {

							alert("Last Name should not be empty");
				
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
					} else if(document.myForm.pnum.value == ""){

						alert("Phone Number empty");
							document.myForm.pnum.focus();
				
							return false;
					}else if(!document.myForm.pnum.value.match(numericExpression)){
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
			background-color:;
			font-size: 35px;
			color: white;
			padding: 10px;
			font-weight: bold;
			border-radius: 10px;
			border:1px solid white;
			background-color:#052146;
		}
		#main{
			margin:20px;

		}
		#section{
			background-color: ;
			  box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2);
			text-align: center;
			margin:auto 25%;
			padding:20px;
			border-radius: 10px;
			
		}
		#label1{
			font-size: 20px;
			font-weight: bold;
			color: black;
			float: left;
			padding-left: 50px;
			margin-bottom: 0px;
			margin-top: 10px; 
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
		#buttonup:hover{
			background-color:lightblue;
			color: black;
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
	#buttonup{
		border:3px solid white;
		background-color:#052146;
	}

	</style>
</body>
</html>