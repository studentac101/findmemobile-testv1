<?php 
	function send_notification ($tokens, $message)
	{
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $message
			);
		$headers = array(
			'Authorization:key = AAAA-UUc1uk:APA91bEw-ajWFV9-8zClTXq8Rhh9WJwwtC3dohNaaRW9miryPY4Ur5ezyU2y1yAmcD6hsZ1f_mTYxQ9YpqMlXbunztbbWqZMeOAlkSaya7h6dG0TuGvalKdklj5xNYmGhfbQunOf4Uk1 ',
			'Content-Type: application/json'
			);
	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
	}
	
	$conn = mysqli_connect("localhost","root","","findme");
	$sql = " Select token From devices";
	$result = mysqli_query($conn,$sql);
	$tokens = array();
	if(mysqli_num_rows($result) > 0 ){
		while ($row = mysqli_fetch_assoc($result)) {
			$tokens[] = $row["token"];
		}
	}
	mysqli_close($conn);
	$message = array("message" => " FindMe .. HELLO!");
	$message_status = send_notification($tokens, $message);
	echo $message_status;
 ?>