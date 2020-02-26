<?php
session_start(); 
$main = $_SESSION['id'];
    require_once('connect.php');

    if (isset($_POST['update'])) {

    	if (empty($_POST['fname'])){

			header("location:account.php?empty");

		}else{

    		$fname = mysqli_real_escape_string($con,$_POST['fname']);
			$lname = mysqli_real_escape_string($con,$_POST['lname']);
			$email = mysqli_real_escape_string($con,$_POST['email']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$pnum = mysqli_real_escape_string($con,$_POST['pnum']);
		

		
    	
    	if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
    		echo "accepts only alphabate";

    	}else{

    		$sql = "SELECT FROM smsdata WHERE email = '".$email."'";
    		$result = mysqli_query($con,$sql);

    		


    		if($result= true){
    			
    			$query = "UPDATE smsdata SET smsdata.fname='$fname', smsdata.lname='$lname', smsdata.email='$email', smsdata.pnum='$pnum' WHERE smsdata.id='".$main."'";
    			$result=mysqli_query($con,$query);
    			

    			if ($result==true) { 
							echo "success";
							header("location:userdashnew.php?welcome");
							exit();
						}else{
							echo "Failed to update record.";
							exit();
    		}


    	}
    }
	}
}





 ?>