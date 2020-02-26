<?php 
		session_start();
		require_once('connect.php');


if(isset($_POST['signup'])){

			$fname = mysqli_real_escape_string($con,$_POST['fname']);
			$lname = mysqli_real_escape_string($con,$_POST['lname']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$pnum = mysqli_real_escape_string($con,$_POST['pnum']);
			$password = mysqli_real_escape_string($con,$_POST['snum']);

			//$hass=password_hash($snum, PASSWORD_DEFAULT);

			//if ($fname = '' and $lname = '' and $email ='' and $gender = '' and $pnum = '' and $password = '') {
			//	echo "<script>alert<Plz,Fill up the form>;</script>";
			//}else{
	
		$sql="insert into smsdata(fname,lname,email,gender,pnum,pwd) values('$fname','$lname','$email','$gender','$pnum','$password')";
		

		$result=mysqli_query($con,$sql);
	

		if ($result == true) {

			$error = "success";

			header("location:Homepage.php?success");
			exit();
			

		}else{
			$success = "failed";

			header("location:register.php?failed");
			
			exit();

					}
//}
	}else{
		echo "not submitted";
	}
	

 ?>