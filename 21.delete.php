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

$rcvd = $_REQUEST['id'];
$rcvd_n = $_REQUEST['Profile_pic'];

$query = "DELETE FROM user_info WHERE id = $rcvd";
$run_delete_query = mysqli_query($conn,$query);

if ($run_delete_query){
    unlink("uploads/$rcvd_n");
  header("Location:21.delete from directory.php?deleted");
}


?>