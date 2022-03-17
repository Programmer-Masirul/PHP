<html>
<body>

<h2>PHP Form Validation Example</h2>

<form method="post" action="9.output.php">  
  Name: <input type="text" name="name">
  
  <br><br>
  E-mail: <input type="text" name="email">
  
  Password: <input type="password" name="password">
 
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
/*
if (isset ($_REQUEST['wrongpass'])){

    
    echo $_REQUEST['wrongpass'];

}*/



?>



</body>
</html> 