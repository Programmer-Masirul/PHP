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

if (isset($_REQUEST['edit_id'])){
   $rcvd_id = $_REQUEST['edit_id'];
   $get_info = "SELECT * FROM user_info WHERE id = $rcvd_id ";
   $select_info =  mysqli_query($conn, $get_info);

   while ($row = mysqli_fetch_assoc($select_info )){

   

?>


<form action="16.update_data.php" method="post">
        <input type="text" name="username" value = " <?php echo $row ['username'];?>" placeholder="Username">
        <input type="email" name="email" value =  "<?php echo $row ['email'];?>" placeholder="Email">
        <input type="password" name="password" value = "<?php echo $row ['password'];?>" placeholder="Password"> 
        <br>
        <input type="submit" name="submit" value="Update Data">
        <input type="hidden" name="updating_hidden_id" value= " <?php echo $rcvd_id; ?>">
    </form>



<?php

   } 
} else {

    echo "not found";

}

?>





    
</body>
</html>