<?php

  include 'connection.php';
  

    if(isset($_POST['username'])&& isset($_POST['password']))
    {

        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $result= 0;

          $sql = "SELECT id FROM petitioners WHERE username = '$username' && password = '$password'";
          $result = $conn->query($sql);

		$row =$result->fetch_assoc();

        if ($result->num_rows > 0) {

             echo $row["id"];
              exit;

            } else {

                echo "failed";
                exit;
            }

       }else{
		echo "failed";
    }
 ?>
