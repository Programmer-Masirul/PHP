  <!DOCTYPE html>
  <head>
      <title>PHP WITH MYSQL</title>
  </head>
  <body>


  <form action="" method="post" enctype="multipart/form-data">
          <input type="text" name="search-name" placeholder="search Username">
        
          <input type="submit" name="search" value="search" >
      </form>

      <br>

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


          
  if(isset($_REQUEST['search'])){

      $recvd = $_REQUEST['search-name'];


    $query = "SELECT * FROM user_info WHERE username LIKE '%$recvd%'";

    $adanprodan = mysqli_query ($conn,$query);

    $count = mysqli_num_rows($adanprodan);
    echo "<br>";

    if($count > 0){

      if (isset ($_REQUEST['updated'])){

        echo" <font color='green'> UPDATED SUCCESS </font>";
      }
  }
  ?>
  



  <table class="table" border="2" >
          <thead  >
              <tr>
                  <th> SERIAL <br> NUMBER </th>
                  <th> ID  </th>
                  <th> PROFILES </th>
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
      $Profile_pic = $row ['Profile_pic'];
      $email = $row['email'];
      $password = $row['password'];
      $serial_number++;
  ?>



  <tbody>
              <tr>
                  <td><?php echo $serial_number; ?></td>
                  <td><?php echo $db_id; ?></td>
                  <td><img width="50px" src = "uploads/<?php echo $Profile_pic;?>"></td>
                  <td><?php echo $username;?></td>
                  <td><?php echo $email; ?></td>
                  <td> <?php echo $password; ?> </td>
                  <td> <a href ="16.Update Part.php?edit_id=<?php echo "$db_id"; ?> "> Edit </a> ||
                  <a onclick="return confirm('Are you sure?')" 
                  href="21.delete.php?id=<?php echo $db_id?>&Profile_pic = <?php echo $Profile_pic;?> " > Delete</a> </td>
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