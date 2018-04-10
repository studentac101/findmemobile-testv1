<?php

  require 'connection.php';
    
	
	$id= $_POST['id'];

    $sql = "SELECT a.first_name,a.last_name,a.contact_no,a.lat,a.lng,a.image_url,a.created_at FROM sightings as a
			WHERE a.status=1 && a.incident_id=$id";
		
    $row=array();
    $data=array();	
    if ($result=$conn->query($sql)) {
	
		
	if($result->{"num_rows"}!=0){
	 while( $row[] = $result->fetch_assoc()){
        $data=json_encode($row);
	 }
	  echo $data;
	  exit;
	}else{
		echo "failed";
		exit;
	}
      

    }else{
		echo "failed";
		exit;
	}

 ?>
