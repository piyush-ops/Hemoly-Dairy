<?php

include("registration.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../project/css/contact.css">
    <link rel="stylesheet" href="../project/css/media.css">
    <link rel="shortcut icon" href="../project/images/ico.ico" type="image/x-icon">
</head>
<body>
    <div class="overlay">
    <span id="linenav">☰</span>

    <div class="secondarynav" id="secondarynav">
        <ul>
            <li id="cross">❌</li>
            <li class="snavoption"><a class="sechome"     href="../project/Hemoly.php" >Home</a></li>
            <li class="snavoption"><a class="secabout"    href="../project/about.htm" >About</a></li>
            <li class="snavoption"><a class="secproduct"  href="../project/product.htm" >Product</a></li>
            <li class="snavoption"><a class="secprocess"  href="../project/process.htm" >Process</a></li>
            <li class="snavoption"><a class="seccontact"  href="../project/Contact.htm" >Contact</a></li>
            <li class="snavoption"><a class="secbranches" href="../project/branches.htm" >Branches</a></li>
        </ul>
    </div>

    <header onmouseleave="product2()">
        <a class="logo2" href="../project/Hemoly.php"><img src="../project/images/Logo hemoly name.png" width="150vw"></a>
        <ul>

            <li class="logo"><img src="../project/images/Logo hemoly name.png" width="150vw">
            </li>
            <li><a class="home" href="../project/Hemoly.php" onmouseenter="product2()">Home</a></li>

            <li><a id="product" class="product" href="../project/product.htm" onmouseenter="product()">Products<span style="font-size: small;">▼</span></a>
                <ul class="productnav" id="productnav" onmouseleave="product3()">
                    <li><a href="milk.htm" class="productnavelem" id="productnavelem">Milk</a></li>
                    <li><a href="curd.htm" class="productnavelem" id="productnavelem">Curd</a></li>
                    <li><a href="ghee.htm" class="productnavelem" id="productnavelem">Ghee</a></li>
                    <li><a href="flavmilk.htm" class="productnavelem" id="productnavelem">FlavMilk</a></li>
                    <li><a href="butter.htm" class="productnavelem" id="productnavelem">Butter</a></li>
                    <li><a href="paneer.htm" class="productnavelem" id="productnavelem">Paneer</a></li>
                </ul>
            </li>

            <li><a class="about" href="../project/about.htm" onmouseenter="product2()">About</a></li>
            <li><a class="process" href="../project/process.htm" onmouseenter="product2()">Process</a></li>
            <li><a class="contact" href="../project/contact.htm"onmouseenter="product2()">Contact</a></li>
            <li><a class="branches" href="../project/branches.htm" onmouseenter="product2()">Branches</a></li>
        </ul>
        

        <div class="movingimg"><img src="../project/images/cow.png" width="40px"></div>


    </header>
    <main>
        <form action="" method="POST">
        <h1 class="heading" style="text-align:center; color: white;">Give Us Your Details For Us To Contact</h1>
        <label for="firstname" class="labels">FirstName</label>
        <input  id="first" type="text" class="field" name="fname" required>
        <label for="lastname"  class="labels">LastName</label>
        <input  id="last" type="text" class="field" name="lname" required><br>
        <label for="phoneno"  class="phonelabel">Phone no</label>
        <input id="phone" type="telephone" class="field" name="number" pattern="\d{10}$" required> <br>
        <label for="email"  class="email" >E-Mail</label>
        <input id="email" type="email" class="field" name="eid" required><br>
        <label for="question"  class="labels">Your Question For Us</label><br>
        <textarea id="area" class="area" name="msg" required></textarea>
        <button  class="button" type="reset" >Reset</button>
        <button class="button1" name="submit">Submit</button>
        </form>
        <!--<div style="color: white;"><h1>*Refresh page before you click submit </h1></div>-->
        
        <!--<div id="alldetails" class="alldetails">
        </div>-->
      <!--<div class="firstflex">
            <button id="reset" onclick="reset()">Reset</button>
            <button id="submit" onclick="submit()">Submit</button>
        </div>
    -->

        <h1 class="heading" style="text-align:center; color: white;">You Can Also Contact Us</h1>
      
      <div class="ourdetail">
            Sri Hemoly Dairy Private Limited<br>

        No.158-A, loco Road,Near Hanuman Mandir
        ,ratanada - 342001.<br>

        Mobile No : +91 9894986775, 9894956870<br>

        Landline : 2094 - 4789373, 2395682 , 4569363<br>

        For Overseas Enquiry<br>

        Toll Free No : 1800 120 4137<br>

        E-Mail id : ABCD@gmail.com<br>

        GST NO : 33ABCCS6756C1ZN<br>
        </div>

    </main>
    <footer id="footer">

        <div id="time"></div>
        <div class="footerflex">
            <div class="contactdetail">
                <h1>Contact Details</h1>
                Sri Hemoly Dairy Private Limited<br>

                No.158-A, loco Road,Near Hanuman Mandir
                ,ratanada - 342001.<br>

                Mobile No : +91 9894986775, 9894956870<br>

                Landline : 2094 - 4789373, 2395682 , 4569363<br>

                For Overseas Enquiry<br>

                Toll Free No : 1800 120 4137<br>

                E-Mail id : ABCD@gmail.com<br>

                GST NO : 33ABCCS6756C1ZN<br>


            </div>
            <div>

                <a class="footerlogo" href="../project/Hemoly.php"><img src="../project/images/Logo hemoly name.png" width="150vw"></a>
                
            </div>

        </div>

        <p class="footertext">&copy; Copyright 2021, Hemoly dairy Products.</p>

    </footer>
    <script>
        time = () => {//time code at footer
      
      document.getElementById("time").innerHTML = `TIME: ${new Date().toLocaleTimeString()}*`;
    
    }
    
    setInterval(time, 1000);
    
    const productsub=document.getElementById("product");
    
    const productnav=document.getElementById("productnav");
    
    productsub.product=()=>{//navigation bar progress option code
       
        productnav.style.display = "block";
    
        productsub.style.background="rgb(238, 32, 115)";
    
        productsub.style.color="rgb(245,245,250)";
         
    };
    
    product2=()=>{//navigation bar progress option code
        
        productnav.style.display="none";
        
        productsub.style.background="rgb(245,245,250)";
        
        productsub.style.color="black";
    };
    product3=()=>{//navigation bar progress option code
        
        productnav.style.display="none";
        
        productsub.style.background="rgb(245,245,250)";
        
        productsub.style.color="black";
    };
    
    //code for secondary nav
    /*
    
    const linenav=document.getElementById("linenav");
    
    const secondarynav1=document.getElementById("secondarynav");
    
    const cross=document.getElementById("cross");
    
    linenav.onclick=()=>{secondarynav1.style.transform="translateX(0%)"};
    
    cross.onclick=()=>{secondarynav1.style.transform="translateX(-100%)"}
    
    }
    
     const  first=document.getElementById("first").value;
     const  last=document.getElementById("last").value;
     const  email=document.getElementById("email").value;
     const  phone=document.getElementById("phone").value;
     const  alldetails=document.getElementById("alldetails"); 
     const submit1=document.getElementById("submit");
     const reset1=document.getElementById("reset");

        
    
     function contactform(){alldetails.innerText=`Your Name is ${ first}${ last},your email id is${ email} and your Phone Number is${ phone}`;
        alldetails.style.background="green";
        reset1.style.display="block";
        submit1.style.display="block";
       };
    
       reset=()=>{alldetails.innerHTML="";  
    };
    submit=()=>{
        if(alldetails.innerHTML.length<20){alert("enter some info for us to contact")}else{alert("we will contact you soon");};
        alldetails.innerHTML="";
        
    };
    */
   
    </script>
    </div>
</body>

</html>

<?php
if(isset($_POST['submit']))
{

 
 $firstname=$_POST['fname'];
 $lastname=$_POST['lname'];
 $phone=$_POST['number'];
 $email=$_POST['eid'];;
$text=$_POST['msg'];


$dup_email=mysqli_query($conn,"SELECT * FROM `contact` WHERE  email='$email'");
if(mysqli_num_rows($dup_email)){
  ?>
 <script>
 alert('this email is already used');
  </script>
  
  <?php 
}
else
{
$query="INSERT INTO  contact VALUES('','$firstname','$lastname','$phone','$email','$text')";
$data=mysqli_query($conn,$query);


   if($data)
   {

  
 ?>

<script>alert('your details are received we will call back you soon');
   </script>

<?php
   }   
   else
   {
?>

    <script>alert('please enter your details correctly');
    </script>
    
    <?php

   }
  }
}




?>