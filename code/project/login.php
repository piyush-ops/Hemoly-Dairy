
<?php
include( "registration.php");
if(isset($_POST['login']))
{

$uemail=$_POST['email'];
$upass=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM registration  WHERE  email='$uemail' and password='$upass' ");

session_start();

if(mysqli_num_rows($result))
{

    ?>
    <script>alert('login sucessful');
  
 
    window.location.href='../project/hemoly.php';
     </script>
     
     <?php  
}
else{

    ?>
    <script>alert('incorrect email/password');
    window.location.href='login.php';
     </script>
     
     <?php
}
}
    ?>

        <html>
        <head>
      <link rel="stylesheet" href="../project/login.css">
      </head>
     <body>

      <div class="overlay">
      <h1 class="ml2">welcome to hemoly dairy</h1>
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
     <div class="logo">
           <img src="../project/images/Logo1.png"> 

         
    <form class="box"action="" method="post">
    <body>
    <body>
    <div class="cow"> <img src="../project/images/cow1.png"></div>
    <h1>Login</h1>
 
         <input type="email"class="input-field"placeholder="Email Id" name="email" required>
         <input type="password" class="input-field" placeholder="Enter Password" name="password" required> 
       <button type="submit" class="submit-btn" name="login" value="login">log in</button>
       <div class="link">Don't have an account? <a href="signin.php">signup</a></div>
       
       
       
        </form>

         </body>
          <script>
         // Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
  </script>
        </html>