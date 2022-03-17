<?php

  $usrname = $_REQUEST['name'];
  $usremail = $_REQUEST['email'];
  $usrpassword = $_REQUEST['password'];

  $countpass = strlen($usrpassword);

  if (($countpass >=5 && $countpass <=10) == false){
      header("Location: 8. Login Validation & Data transfer.php?wrongpass=You entered this password $usrpassword" );
  } else{
      echo "ok";
  }


?>