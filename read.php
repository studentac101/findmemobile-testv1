<?php
  
  require 'connection.php';
	
    $sql = "SELECT b.id,a.first_name,a.last_name,a.gender,a.nationality,a.height,a.weight,a.medical_history,a.body_marks,a.top,a.bottom,a.imgurl,
	a.date_last_seen FROM  missings as a JOIN incidents as b ON a.id=b.missing_id AND b.status=1";
    
    $row=array();
    $data=array();	
     if ($result=$conn->query($sql)) {
	$data='eric';
		
	if($result->{"num_rows"}!=0){
	 while( $row[] = $result->fetch_assoc()){
		 
        $data=utf8_encode($row);
	 }
	  echo json_encode($data);
	}else{
		echo "failed";
	}
      

    }else{
		echo "failed";
	}


 ?>
