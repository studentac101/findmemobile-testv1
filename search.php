<?php

  require 'connection.php';
  

if($_POST['query']!=null || $_POST['query']!=""){
	
	$name=$_POST['query'];
					
			$sql="SELECT * FROM missings as A JOIN incidents as B on A.id = B.missing_id WHERE A.first_name = '%$name%' OR A.last_name = '%$name%' OR CONCAT (A.first_name,' ',A.last_name) LIKE '%$name%' && B.status = 1";
			
			
			//$sql2="SELECT * FROM missings JOIN incidents WHERE  missings.first_name LIKE '%$name%'
			//	  OR missings.last_name LIKE '%$name%'
			//	  OR CONCAT(missings.first_name,' ',missings.last_name) like '%$name%
			//	 '"; 
			$query=mysqli_query($conn,$sql);
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

		
		
	}else{
			  echo('failed');
				exit;
	}
	
	
	
	


?>

<!--$sql2 = SELECT * FROM missings as A INNER JOIN incidents as B on A.id = B.missing_id WHERE A.first_name = 'Doe' OR A.last_name = 'Doe' && B.status = 1-!>