<?php

if (isset($_POST['submit'])){

 
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$REQUEST['gender'];
  $country=$_REQUEST['country'];

  $pro=$_FILES['profile'];
  $name=$pro['name'];
  $tmp_name=$pro['tmp_name']; 
    
  

 if(!empty($name)){

  $loc = "uploads/";

 if (move_uploaded_file($tmp_name, $loc.$name)){

  header("Location: 24.Dropdown Gender insert.php");
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
  $query = "INSERT INTO user_info (Profile_pic, username,email,password,gender,country) 
  VALUES('$name','$username','$email','$password','$gender','$country')";


$result = mysqli_query($conn,$query);

if(!$result){
  die ("Not inserted" .mysqli_error());
} else {
  echo "Success";
  }

  }
}
?> 


