<?php
include( "registration.php");
?>
    <html>
      <head>
      <link rel="stylesheet" href="signin.css">
      </head>
     <body>
      <div class="overlay">
     <div class="logo">
           <img src="../project/images/Logo1.png"> 
          
     </div> 
         
    <form  class ="box"action="" method="post">
           
          <h1>Sign up</h1>
         <input type="text" class="input-field"placeholder="User id"  name="userid" required> 
       
       
         <input type="email"class="input-field"placeholder="Email Id" name="email" required>
         <input type="password" class="input-field" placeholder="Enter Password" name="password" required> 
         <input type="tel"  class="input-field" placeholder="mobile number" name="number" required>
     
       <button type="submit" class="submit-btn" name="submit" value="signin"> sign in</button>
       <div class="link">already have an account ? <a href="login.php">login</a></div>
       
       
       
        </form>
       
     </body>
    </html>  
  
        <?php

if(isset($_POST['submit']))
{

 
 $uid=$_POST['userid'];
 $eid=$_POST['email'];
$pass=$_POST['password'];
$num=$_POST['number'];


$dup_email=mysqli_query($conn,"SELECT * FROM `registration` WHERE  email='$eid'");
if(mysqli_num_rows($dup_email)){
  ?>
 <script>alert('this email is already taken');
  </script>
  
  <?php

}
else
{
$query="INSERT INTO  registration  VALUES('','$uid','$eid','$pass','$num')";
$data=mysqli_query($conn,$query);


   if($data)
   {

  
 ?>

<script>alert('data inserted');
   </script>

<?php
   }   
   else
   {
?>

    <script>alert('data  not inserted');
    </script>
    
    <?php

   }
  }
}

?>
