<?php

  require 'connection.php';
  
  $_POST['petitioner_id']=1;
  $id=$_POST['petitioner_id'];
	

   $sql = "SELECT b.id,b.station_id,a.first_name,a.last_name,a.gender,a.nationality,a.height,a.weight,a.medical_history,a.body_marks,a.top,a.bottom,a.imgurl,a.date_last_seen,b.sightings_ctr
			 FROM `incidents` as b JOIN missings as a ON b.missing_id=a.id && b.status=1 JOIN petitioners as c ON b.petitioner_id=c.id";
    
	
    $row=array();
    $data=array();
	
    if($result=$conn->query($sql)) {
		if($result->{"num_rows"}!=0){
		while($row[]= $result->fetch_assoc()){
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
