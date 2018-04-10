<?php 

	include 'connection.php';	
	$token= $_POST['token'];
	$sql = "INSERT into devices(token) VALUES ('$token') ";

    if ($conn->query($sql)) {

      echo "success";
      exit;

    }else{

      echo "failed";
      exit;

      }


?>