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
  die("Connection failed: " . mysqli_connect_error($conn));
}else{
  echo "Connected Successful";
  echo "<br>";
}

  $query = "SELECT * FROM user_info";

  $adanprodan = mysqli_query ($conn,$query);

  $count = mysqli_num_rows($adanprodan);
  echo "<br>";

  if($count > 0){

    if (isset ($_REQUEST['updated'])){
      echo" <font color='green'> UPDATED SUCCESS </font>";
    }
?>
 

 <table class="table" border="2" >
        <thead  >
            <tr>
                <th> SERIAL <br> NUMBER </th>
                <th> ID  </th>
                <th> NAME </th>
                <th> EMAIL </th>
                <th> PASSWORD </th>
                <th> ACTION </th>
            </tr>
        </thead>



 <?php
 $serial_number = 0;
  while ($row = mysqli_fetch_array($adanprodan)){

    $db_id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
    $serial_number++;
?>



<tbody>
            <tr>
                <td><?php echo $serial_number; ?></td>
                <td><?php echo $db_id; ?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $email; ?></td>
                <td> <?php echo $password; ?> </td>
                <td> <a href = "16.Update Part.php?edit_id=<?php echo "$db_id"; ?> "> Edit </a> || <a href="15.delete.php?id=<?php echo $db_id?> " > Delete</a> </td>
            </tr>
</tbody>



<?php

  echo "<br>";
  }
}else{
  echo "You don't have any data in your database";
}

?>

</body>
</html>