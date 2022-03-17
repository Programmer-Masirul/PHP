<?php

if (isset($_POST['submit'])){

 
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $pro=$_FILES['profile'];
  $name=$pro['name'];
  $tmp_name=$pro['tmp_name']; 
    
  

 if(!empty($name)){

  $loc = "uploads/";

 if (move_uploaded_file($tmp_name, $loc.$name)){

  header("Location: 19.profile pic up.php");
  echo "File uploaded successfully!";

     $path= $loc.$name;
     echo "<img src='$path' width='500 'height='500'>";
     
 }else{
     echo "failed";}

} else{
  echo "file upload please!";
}



if($username != ""){

// Create connection
$conn = mysqli_connect('localhost','root','','masirul');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connected Successful";
  echo "<br>";
}
  $query = "INSERT INTO user_info (Profile_pic, username,email,password) 
  VALUES('$name','$username','$email','$password')";


$result = mysqli_query($conn,$query);

if(!$result){
  die ("Not inserted" .mysqli_error());
} else {
  echo "Success";
  }

  }
}
?> 
