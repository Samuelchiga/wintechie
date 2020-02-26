<?php 	

	session_start();
		require_once('connect.php');



		if (isset($_POST['send']) && isset($_SESSION['selected'])) {
			$senderid =($_POST['enterid']);
			$token='GQ80KkC5iuxCZe0uQKWnApCZDeeDtdqRFEQVh5uWTTqoMPcOlAjwyBSqVeyVhRNsFKgyDJu7ZkX0OdqPESvr0qtQCLLpLX07JjOW';
			$baseurl= 'http://smartsmssolutions.com/api/json.php';

			$count = 0;

			foreach ($_SESSION['selected'] as $user) {
				$to = $user["fnum"];
				$message = str_replace("__NAME__", $user["hname"], $_POST['message']);

				$sms_array = array(
					'sender' =>$senderid, 'to' =>$to, 'message' => $message,
					'type' => '0', 'routing' => 5, 'token' => $token
				);

				$param = http_build_query($sms_array);
				$ch = curl_init();

				curl_setopt($ch, CURLOPT_URL,$baseurl);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
				curl_setopt($ch, CURLOPT_POST,1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$param);

				$output = curl_exec($ch);

				if ($output==true) {
					$senderid = mysqli_real_escape_string($con,$_POST['enterid']);
					$recipient = mysqli_real_escape_string($con,$_POST['recipient']);
					$message = mysqli_real_escape_string($con, $message);
					$userid = mysqli_real_escape_string($con,$_POST['userid']);

					date_default_timezone_set('Africa/Lagos');
					$time = date('Y-m-d ', time());
					$date = date('h:i:s a', time());


					$sql = "INSERT INTO msglog (senderid, recipient, message,time,date,userid) VALUES('$senderid', '$recipient', '$message','$time','$date', '$userid') ";
					
					$result = mysqli_query($con, $sql);

					if ($result) { $count++; }
				} else{
		        	?>
 
	               <script >
	                  alert('Message has not been sent');
	                  window.location.href = "sendsms2.php";
	               
	               </script>
	                <?php
	            	}
				}

				?>
					<script >
		                alert('Message sent successfully to <?php echo $count ?> user(s), <?php echo count($_SESSION['selected'])-$count ?> failed!');
		                window.location.href = "smslogs.php";
		               
		            </script>
				<?php
			} else {
				?>
					<script >
	                  alert('Message has not been sent');
	                  window.location.href = "sendsms2.php";
	               
	               </script>
				<?php
			}





		//$token='tOxpZuRuzfPLShpTf510LCrNRiiOWNBitu7iHKifjlIVTjrWaxQfHnF7zph8eMOFZwFTZbu4kWSBr1yTgYGi03gIg5EtDUTYZevb';
		//$routing = 5;
		//$type = 2;

		//echo $output;
		//die();
		
		//curl_close($ch);
		//$checkbalance = "http://smartsmssolutions.com/api/?checkbalance=1&token=".$token;
		//$balance= file_get_contents($checkbalance);
		//echo $balance;
			//$explod = explode('', $time);
			
			

			//$_SESSION['DATE']= date('l,jS F h:ia');
			//$date=$_SESSION['DATE'];
			//$date_field = date('Y-m-d', strtotime($_POST['date_field']));
 ?>