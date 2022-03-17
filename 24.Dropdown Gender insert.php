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

        if(isset($_REQUEST['delete_m_data']))

        $chk_data = $_REQUEST['check_data'];
        //$all_marked = implode( ",", $chk_data);
        //echo  $_REQUEST['check_data'];
        //$all_marked = implode( ",", $_REQUEST['check_data']);

        
        $all_marked = implode( ",",$chk_data);

        echo $all_marked;

         
        
        $query = "DELETE FROM user_info WHERE id in $all_marked";
        $run_delete_query = mysqli_query($conn,$all_marked);
  
    ?>
    

    <form action="24.insert.php" method="post" enctype="multipart/form-data">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <select name="country">
                <option> Select your country </option>
                <option value="Bangladesh"> Bangladesh </option>
                <option value="USA"> USA </option>
            </select>
          
            <input type="file" name="profile" value="upload">
            <input type="submit" name="submit" value="Submit">
        </form>

        <br>

        <form action="" method="post">

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
                    <th> <input type="submit" name="delete_m_data" value="Delete" > M-DELETE </th>
                    <th> GENDER </th>
                    <th> COUNTRY </th>
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
        $gender = $row['gender'];
        $country = $row['country'];
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
                    <td> <center> <input type="checkbox" name="check_data[]" value ="<?php echo $db_id; ?>" </center> </td>
                    <td><?php echo $gender; ?></td>
                    <td><?php echo $country; ?></td>
                    </tr>
    </tbody>



    <?php

      echo "<br>";
      }
    }else{
      echo "You don't have any data in your database";
    }

    ?>
    </table>
    </form>
    </body>
    </html>