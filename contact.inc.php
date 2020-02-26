<?php 
		$main = $_SESSION['id'];
		require_once('connect.php');

		if (isset($_POST['enter'])) {
			
			
			$fname = mysqli_real_escape_string($con,$_POST['fname']);
			$lname = mysqli_real_escape_string($con,$_POST['lname']);
			$gender = mysqli_real_escape_string($con,$_POST['gender']);
			$pnum = mysqli_real_escape_string($con,$_POST['pnum']);
			$userid =mysqli_real_escape_string($con,$_POST['userid']);
			


			//if ($fname = '' and $lname = '' $gender = '' and $pnum = '') {
			//	echo "fill the form properly";
			//	header("location:contactbook.php");
			//}else{
				$sql = "INSERT INTO contactdata(fname, lname, gender, pnum, userid) VALUES ('$fname', '$lname', '$gender', '$pnum','$userid') ";

		 		// print_r($sql);
				 //die();

				$result = mysqli_query($con,$sql);
 
				if ($result = true) {
                 ?>
 
               <script >
                  alert('hello...You have successfully created a record');
              
                  window.location.href = "contactbook.php?welcome";
               
               </script>";
                <?php
					
				}else{
					   ?>
 
               <script >
                  alert('hello...The record was not created');
              
                  window.location.href = "contactbook.php?welcome";
               
               </script>";
                <?php
					//header("location:contactbook.php?error");
				}
			//}
		}

		$records = mysqli_query($con,"SELECT * FROM contactdata WHERE userid ='".$main."' ");

		//$query = "SELECT count( * ) AS id FROM contactdata";
		//$result = mysqli_query($con,$query);
		//$row = mysqli_num_row($result);


		//$query = mysqli_query("SELECT * FROM contactdata");
		//$result = mysqli_query($con,$query);
		//$num = mysqli_num_rows($result);
		//print_r( $result);

		//print_r($result);
		//die();


 ?>