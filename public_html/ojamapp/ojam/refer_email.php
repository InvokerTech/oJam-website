<?php
include 'db.php';
$referred_email = $_GET['email'];
$refer_id = $_GET['id']; 
$uniq_id = uniqid();
$sql2 = "SELECT * FROM users WHERE email_id = '$referred_email'"; 
  $result2 = mysqli_query($link, $sql2); 
  if(mysqli_num_rows($result2) == 0){
  	  $sql = "SELECT * FROM users 
                    WHERE unique_id = '$refer_id'";
	  $result = mysqli_query($link, $sql); 
	  $row    = mysqli_fetch_assoc($result); 
	  extract($row);
	  $sql3 = "INSERT INTO users(email_id,unique_id,referred_by) 
                      VALUES('$referred_email','$uniq_id','$email_id')";
	  $result3 = mysqli_query($link, $sql3);	
	  $refer_count = $refer_count + 1; 
      if($result3){

		    $sql1 = "UPDATE users SET refer_count = '$refer_count' 
                      WHERE unique_id = '$refer_id ' ";
      		$result1 = mysqli_query($link, $sql1); 
		    if($result1){

		       require_once("class.phpmailer.php");
 		       include 'mail.php';
               echo true;

		  }
		  else{
		  	echo 'Refer Id doen not exists.';
		  	exit;
		  }
	  }

	}  
	else{
		echo false;
	}
 ?>
		  