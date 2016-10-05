<?php
  session_start();
  include 'db.php';
  $referred_email = $_POST['email'];
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
    $_SESSION['uniq_id'] = $uniq_id;
    header('Location:thank-you.php');
    }
 }
 else{
    echo '<script>';
    echo 'alert("Email Already Registered.");';
    echo '</script>';
  ?>
    <meta http-equiv="refresh" content="0;URL='index.php'" />
<?php
 }
?> 