<?php
    
  $servername='localhost';
     $dbusername='root';
     $password='';
     $dbname='signup';  


     $conn=mysqli_connect($servername,$dbusername,$password,$dbname);

     if($conn)
     {

          echo "";

     }
      else
      {

          die ("coonection failed beacause".mysqli_connect_error());
           
     }
   
?>