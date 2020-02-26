<?php 
session_start();

include ('connect.php');



            if (isset($_POST['save'])) {

            	if (!empty($_POST['check_list'])) {
            
            	$data = array(

             $fname = mysqli_real_escape_string($con,$_POST['fname']),
			$lname = mysqli_real_escape_string($con,$_POST['lname']),
			$gender = mysqli_real_escape_string($con,$_POST['gender']),
			$pnum = mysqli_real_escape_string($con,$_POST['pnum']),
			$userid= mysqli_real_escape_string($con,$_POST['userid']),


            	);

            	foreach ($data as $key => $value) {
            		$k[]=$key;
            		$v[]= "'".$value."'";
            	}
            	$k=implode(",", $k);
            	$v=implode(",", $v);

            	echo $v;


            	die();
			
            }

}

 ?>