<?php

  $usrname = $_REQUEST['name'];
  $usremail = $_REQUEST['email'];
  $usrpassword = $_REQUEST['password'];
  $hash_password = "$2a$07$";
  $salt_password = "ssda$";
  $conc= $hash_password.$salt_password;
  
  echo $usrpassword;
  echo "<br>";
  echo crypt ($usrpassword, $conc);

  /*$countpass = strlen($usrpassword);

  if (($countpass >=5 && $countpass <=10) == false){
      header("Location: 8. Login Validation & Data transfer.php?wrongpass=You entered this password $usrpassword" );
  } else{
      echo "ok";
  }*/


?>