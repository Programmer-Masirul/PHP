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

    if (isset ($_REQUEST['deleted'])){
      echo" <font color='green'> DELETED SUCCESS </font>";
    }
?>
 

 <table class="table" border="2" >
        <thead  >
            <tr>
                <th> ID </th>
                <th> NAME </th>
                <th> EMAIL </th>
                <th> PASSWORD </th>
                <th> ACTION </th>
            </tr>
        </thead>



 <?php
  while ($row = mysqli_fetch_array($adanprodan)){

    $db_id = $row['id'];
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
?>



<tbody>
            <tr>
                <td><?php echo $db_id; ?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $email; ?></td>
                <td> <?php echo $password; ?> </td>
                <td> <a href="15.delete.php?id=<?php echo $db_id?> " > Delete</a> </td>
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