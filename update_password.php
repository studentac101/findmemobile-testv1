<?php 
	
	require 'connection.php';
	//$_POST['id']=1;
	//$_POST['password']="admin";
	$id=$_POST['id'];
	$password=md5($_POST['password']);
	//$id=1;
	//$password="admin";
	
	
	$sql = "UPDATE petitioners SET password = '$password' WHERE id = '$id'";
	$result = $conn->query($sql);
	
		
        if ($result) {
             echo "success";
              exit;

            } else {

                echo "failed";
                exit;
            }
 
    
	
  




?>