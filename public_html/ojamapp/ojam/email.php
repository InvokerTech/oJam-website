<?php

  include 'db.php';
  $referred_email = $_GET['email'];
  $uniq_id = uniqid();
  $sql2 = "SELECT * FROM users WHERE email_id = '$referred_email'"; 
  $result2 = mysqli_query($link, $sql2); 
  if(mysqli_num_rows($result2) == 0){
  $sql = "INSERT INTO users(email_id,unique_id) 
                      VALUES('$referred_email','$uniq_id')";
  $result = mysqli_query($link, $sql); 
  if($result){
		require_once("class.phpmailer.php");
 		include 'mail.php';
                 echo true;
    }
 }
 else{
    echo false;
 }
?> 
<?php
// $ch = curl_init();

// curl_setopt($ch, CURLOPT_URL,"https://euphony-app.herokuapp.com/save/email");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS,
//             "mail=lakshitaverma94@gmail.com");

// // receive server response ...
// // Disable SSL verification
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// // Will return the response, if false it print the response
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec ($ch);

// curl_close ($ch);
// $array = json_decode($result);
// $server_output = $array->result;
// // var_dump(json_decode($result, true));

// // further processing ....
// if ($server_output == "success") { 

//   echo json_encode(true); 
  
// } else {  


// }

	

?>