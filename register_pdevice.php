<?php 

	include 'connection.php';	
	$token= $_POST['token'];
	$p_id=$_POST['id'];
	$id= (Int)$p_id;
	
	$sql = "UPDATE petitioners SET token='$token' WHERE id=$id ";

    if ($conn->query($sql)) {

      echo "success";
      exit;

    }else{

      echo "failed";
      exit;

      }


?>