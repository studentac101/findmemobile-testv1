<?php

 require 'connection.php';
  
	$id=$_POST['petitioner_id'];
	
      $result= 0;


          $sql = "SELECT COUNT(*) as counter
			FROM sightings as a JOIN incidents as b
			WHERE b.petitioner_id=$id && a.status=1 && a.incident_id=b.id";
       
	 $result = $conn->query($sql);
    	$row =$result->fetch_assoc();

		
        if ($result->num_rows > 0) {

             echo $row["counter"];
              exit;

            } else {

                echo "failed";
                exit;
            }
 
       
       
 ?>

