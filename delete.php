<?php
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"demo_db");

   $delete = $_GET['del'];

   $sql = "delete from user where id = '$delete'";
   
   if(mysqli_query($connection,$sql))
      {
      echo "sucees";
      echo '<script> location.replace("nastaf.php")</script>';
      }
      else
      {
        echo 'some thing went wrong' . $connection->error;
      }




?>