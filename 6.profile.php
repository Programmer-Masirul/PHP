<pre>


<?php

    $pro=$_FILES['profile'];

    $name=$pro['name'];
    echo "<br>";
    echo $type=$pro['type']; 
     echo "<br>";
    echo $tmp_name=$pro['tmp_name']; 
     echo "<br>";
     $size=$pro['size'];
    echo "<br>";

    echo floor ($size/1000)."KB";
    echo "<br>";

   

    if(!empty($name)){

        $loc = "uploads/";

       if (move_uploaded_file($tmp_name, $loc.$name)){
        echo "File uploaded successfully!";

           $path= $loc.$name;
           echo "<img src='$path' width='500 'height='500'>";
           
       }else{
           echo "failed";}

    } else{
        echo "file upload please!";
    }

?>


</pre>

