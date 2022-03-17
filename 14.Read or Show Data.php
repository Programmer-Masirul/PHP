<!DOCTYPE html>
<head>
    <title>PHP WITH MYSQL</title>
</head>
<body>

<?php

// Create connection
$conn = mysqli_connect('localhost','root','','masirul');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
  echo "Connected Successful";
  echo "<br>";
}

  $query = "SELECT * FROM user_info";

  $adanprodan = mysqli_query ($conn,$query);

  $count = mysqli_num_rows($adanprodan);
  echo "<br>";

  if($count > 0){

  
  while ($row = mysqli_fetch_assoc($adanprodan)){

    echo "{$row['id']}";
    echo "<br>";
    
    echo "{$row['username']}";
    echo "<br>";
    
    echo "{$row['password']}";
    echo "<br>";
  } 

  echo "<br>";
  echo "$count";
  
} else {
  echo " Dont have any data in your database";
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