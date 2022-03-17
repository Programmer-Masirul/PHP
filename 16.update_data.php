
<?php

// Create connection
$conn = mysqli_connect('localhost','root','','masirul');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error($conn));
}else{
  echo "Connected Successful";
  echo "<br>";
}
 if (isset($_REQUEST['submit'])){
     $user = $_REQUEST ['username'];
     $email = $_REQUEST ['email'];
     $password = $_REQUEST ['password'];
     $updating_hidden_id = $_REQUEST ['updating_hidden_id'];

     $update_query = "UPDATE user_info SET username='$user', email='$email', password=' $password' WHERE id =  $updating_hidden_id";
     $final_update_query = mysqli_query($conn,$update_query);

     if($final_update_query){
      header("Location: 19.profile pic up.php");
     }
 }
?>
 