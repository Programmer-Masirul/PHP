<!DOCTYPE html>
<head>
    <title>PHP WITH MYSQL</title>
</head>
<body>

<?php

if (isset($_POST['submit'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];


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
  $query = "INSERT INTO user_info (username,email,password) VALUES('$username','$email','$password')";


$result = mysqli_query($conn,$query);

if(!$result){
  die ("Not inserted" .mysqli_error());
} else {
  echo "Success";
  }

  }
}
?> 






    <form action="13.insert.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password"> 
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>
</html>