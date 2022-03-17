 
   <?php
        $name= "user";
        $value= "nirob";
        setcookie($name,$value,time()+20);

        if(isset($_COOKIE['user'])){
            echo "Saved cookie is = {$_COOKIE['user']}";
        }else{
            echo "Cookie is not set";
        }


    ?>
