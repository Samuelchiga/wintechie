<?php
session_start();
   require_once('connect.php');
// $conn = mysqli_connect('localhost', 'root','', 'sms');
 //  if (!$conn) {
   //	echo "There is an error Try Some Other Route";
  // }
   if (isset($_POST['login'])) {

   			if (empty($_POST['email']) and empty($_POST['password'])){
               echo "<script>alert<Plz,Login with your detail>;</script>";
   				header("location:./Homepage.php?empty");
   				
		   			}else{

		   	  $email=mysqli_real_escape_string($con,$_POST['email']);

		   	  $password=mysqli_real_escape_string($con,$_POST['password']);

		   	  $sql ="SELECT * FROM smsdata WHERE email = '$email' and pwd = '$password'";

  
              $result= mysqli_query($con,$sql);
		   	  if($row=mysqli_fetch_array($result)){

               $_SESSION['id']=$row['id'];
               
               
              
             ?>
 
               <script >
                  alert('hello...You have successfully login');
                  window.location.href = "userdashnew.php";
               
               </script>";
                <?php
                    // header("location:./userdashnew.php?welcome$fname");
                   
                  
   	  	   	//if(password_verify($password, $row['pwd'])){

                     //echo "password valid";
   	  	   			 
                     

   	  	   		//}else{
                       // echo "<script>alert('You Typed A Wrong Password');</script>";
                        //header("location:Homepage.php?failed");
   	  	   			
   	  	   			
   	  	   		}else{
                      ?>
 
               <script >
                  alert('hello...Your details are not correct');
                  window.location.href = "Homepage.php";
               
               </script>";
                <?php
                    
        }
   	  } 

   }else{
       header("location:./Homepage.php?failed to login");
   echo "not submittedss";
}

?>
