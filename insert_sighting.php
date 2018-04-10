<?php

  require 'connection.php';

  if($_POST['first_name']!=null && $_POST['last_name']!=null && $_POST['contact_no']!=null && $_POST['lat']!=null && $_POST['lng']!=null && $_POST['missing_id']!=null && $_POST['lat']!="0.0"&& $_POST['lng']!="0.0")
  {
  $fname = $_POST['first_name'];
  $mname = $_POST['middle_name'];
  $lname = $_POST['last_name'];
  $contact_no= $_POST['contact_no'];
  $lat = $_POST['lat'];
  $lng = $_POST['lng'];
  $missing_id = $_POST['missing_id'];
  $home_address= $_POST['home_address'];


  $image = $_POST['image'];
  $now = DateTime::createFromFormat('U.u', microtime(true));
  $id = $now->format('YmdHisu');
  $upload_folder = "img";

  //to save the image to localhost
  $img_path="$upload_folder/$id.jpeg";

  //for android to access the image in localhost
  $path = "http://127.0.0.1/findme/$upload_folder/$id.jpeg";

  //to save the image to laravel public/uploads/sightings folder
  $laravel_path= "D:/FindMeWeb/system_no.2/public/uploads/sightings/$id.jpeg";
  $imgurl= "$id.jpeg";

  file_put_contents($img_path, base64_decode($image));
  file_put_contents($laravel_path, base64_decode($image));



  $sql = "INSERT into sightings(incident_id,imgurl,image_url,first_name,middle_name,last_name,contact_no,home_address,lat,lng) VALUES ('$missing_id','$imgurl','$path','$fname','$mname','$lname','$contact_no','$home_address','$lat','$lng')";

    if ($conn->query($sql)) {

      echo "Success";
      exit;

    }else{

      echo "failed";
      exit;

      }

  }else{
	  echo "failed to submit";
	  exit;
  }

 ?>
