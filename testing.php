<?php 

	if (isset($_POST['submit'])) {

		$senderid =urlencode($_POST['enterid']);
		$to = $_POST['recipient'];
		$message = urlencode($_POST['message']);
		$token='3Lomoa3HGsJyLRjJdeooKAH7P06YJXhXnhxRMx5GJ2uCioHxlmqwSAnZbMP6v7c60LN0aWIi4ZDxd8QEIiL8paQ2CSUvhrHqLjeJ';
		$routing = 5;
		$type = 0;
		$baseurl= 'http://smartsmssolutions.com/api/json.php';

		$sms_array = array(
			'sender' =>$senderid, 'to' =>$to, 'message' => $message,
			'type' => '2', 'routing' => 5, 'token' => $token
		);

		$param = http_build_query($sms_array);
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL,$baseurl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_POST,1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$param);

		$output = curl_exec($ch);
		//echo $output;
		//die();

		curl_close($ch);
		//$checkbalance = "http://smartsmssolutions.com/api/?checkbalance=1&token=".$token;
		//$balance= file_get_contents($checkbalance);
		//echo $balance;
		if ($output==true) {
			echo "success";
			echo $output;
		}else{
			echo "failed";
		}

		


		
	}
	
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>testing </title>
</head>
<body>
	<div class="container">
		<center>
		<form class="mt-90 " method="POST" action="testing.php" style="background-color: orange;margin-top: 30px;padding: 20px;width: 280px">
			<label>Enter id <span><input type="text" name="enterid"></span></label><br> 	<br>

			<label>Enter Recipient <span><textarea class=" " name="recipient" cols="26" rows="4" ></textarea></span></label><br><br>

			<label>Enter Message <span><textarea class="" name="message" cols="26" rows="4"></textarea></span></label><br><br>

			<button type="submit" name="submit" >Send</button>


		</form></center>
		

	</div>
</body>
</html>