<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Products Distributors - Milk & Butter Wholesalers</title>
    <link rel="stylesheet" href="../project/css/hemoly.css">
    <link rel="stylesheet" href="../project/css/media.css">
    <link rel="shortcut icon" href="../project/images/ico.ico" type="image/x-icon">

</head>

<body>

    <!-- <div id='loading'><a href="#" class="neonbutton">Hemoly Dairy</a></div> -->

    <span id="linenav">☰</span>

    <div class="secondarynav" id="secondarynav">
        <ul>
            <li id="cross">❌</li>
            <li class="snavoption"><a class="sechome"     href="../project/Hemoly.htm" >Home</a></li>
            <li class="snavoption"><a class="secabout"    href="../project/about.htm" >About</a></li>
            <li class="snavoption"><a class="secproduct"  href="../project/product.htm" >Product</a></li>
            <li class="snavoption"><a class="secprocess"  href="../project/process.htm" >Process</a></li>
            <li class="snavoption"><a class="seccontact"  href="../project/Contact.php" >Contact</a></li>
            <li class="snavoption"><a class="secbranches" href="../project/branches.htm" >Branches</a></li>
            <li class="snavoption"><a class="logout1" href="../project/logout.php" title="logout" width="20px">logout</a></li>
        </ul>
    </div>

    <header onmouseleave="product2()">
        <a class="logo2" href="../project/Hemoly.htm"><img src="../project/images/Logo hemoly name.png" width="150vw"></a>
        <ul>

            <li class="logo"><img src="../project/images/Logo hemoly name.png" width="150vw">
            </li>
            <li><a class="home" href="../project/Hemoly.php" onmouseenter="product2()">Home</a></li>

            <li><a id="product" class="product" href="#productheading" onmouseenter="product()">Products<span
                        style="font-size: small;">▼</span></a>
                <ul class="productnav" id="productnav" onmouseleave="product3()">
                    <li><a href="../project/milk.htm" class="productnavelem" id="productnavelem">Milk</a></li>
                    <li><a href="../project/curd.htm" class="productnavelem" id="productnavelem">Curd</a></li>
                    <li><a href="../project/ghee.htm" class="productnavelem" id="productnavelem">Ghee</a></li>
                    <li><a href="../project/flavmilk.htm" class="productnavelem" id="productnavelem">FlavMilk</a></li>
                    <li><a href="../project/butter.htm" class="productnavelem" id="productnavelem">Butter</a></li>
                    <li><a href="../project/paneer.htm" class="productnavelem" id="productnavelem">Paneer</a></li>
                </ul>
            </li>

            <li><a class="about" href="#aboutheading" onmouseenter="product2()">About</a></li>
            <li><a class="process" href="#processtab" onmouseenter="product2()">Process</a></li>
            <li><a class="branches" href="#branchescontainer" onmouseenter="product2()">Branches</a></li>
            <li><a class="contact" href="#footer" >Contact</a></li>
            <a class="logout" href="../project/logout.php" title="logout" width="20px"></a>
        </ul>


        <div class="movingimg"><img src="../project/images/cow.png" width="40px"></div>
        <audio id="audio" autoplay>
            <source src="../project/media/frishycow.mp3">
        </audio>

    </header>

    <main>

        <div class="container">

            <video class="video1" autoplay loop muted width="1425px" height="500px" controls>

                <source src="../project/media/ad.mp4" type="video/mp4">
                your browser doesnot support html video.

            </video>
            <div id="aboutheading"></div>
            <div class="box1">
                <H1 class="heading">ABOUT US</H1>
            </div>

            <div class="box2">
                <h2 class="subtitle">Hemoly preserves the health and wellness of families & farmers</h2>
            </div>

            <div class="box3">
                <video class="video2" controls height="80%">
                    <source src="media/milk.mp4" type="video/mp4">
                    your browser doesnot support html video.
                </video>

                <div>
                    <p class="us1">Sri Mahalakshmi Dairy is one of the leading dairy companies in South India. Located
                        at Karanampettai near Coimbatore, our Products are Marketed under the brand name "HEMOLY".</p>

                    <p class="us2">Our successful journey with dairy began in 2001 with a sample goal – to serve the
                        poor and economically weaker dairy farmers of Coimbatore and its nearby districts.</p>
                    <p><a class="read" href="about.htm">Read More</a> </p>
                </div>
            </div>

            <div  id="productheading"  class="minicontainer">

                <div id="box1" class="box1">
                    <a style="text-decoration: none;"href="../project/product.htm"><H1 id="producthead" class="heading">PRODUCTS</H1></a>
                </div>

                <div class="box2">
                    <h2 class="subtitle">We bring happiness to every individual with our high-quality products.</h2>
                </div>

                <div class="productcontainer">

                    <div class="milk"><img src="../project/images/Milk Pic.png" width="350rem">
                        <div class="productheading">MILK</div>
                        <div class="milktext">Toned milk from strikes the perfect balance between double toned
                            milk & standardised milk.</div>
                        <div><a class="milkread" href="../project/milk.htm">Read More</a></div>
                    </div>

                    <div class="curd"><img src="images/curd.png" width="350rem">
                        <div class="productheading">CURD</div>
                        <div class="curdtext">Curdled from the farm fresh milk obtained from the dairy cows, curd from
                            Hemoly is tastier.
                        </div>
                        <div><a class="curdread" href="../project/curd.htm">Read More</a></div>
                    </div>

                    <div class="ghee"><img src="images/ghee.png" width="350rem">
                        <div class="productheading">GHEE</div>
                        <div class="gheetext">Clarified from the finest of butter, ghee is rich in antioxidants
                            aiding the absorption of vitamins and minerals.</div>
                        <div><a class="gheeread" href="../project/ghee.htm">Read More</a></div>
                    </div>
               </div>
               <div class="productcontainer2">
                    <div class="flavmilk"><img src="images/flavoured milk.png" width="350rem">
                        <div class="productheading">Flavoured milk</div>
                        <div class="flavmilktext"> Rose milk is the perfect choice. The refreshing taste of the
                            milk lingers longer on your hearts.Kids will love this for sure.</div>
                        <div><a class="flavmilkread" href="../project/flavmilk.htm">Read More</a></div>
                    </div>

                    <div class="butter"><img src="images/butter.png" width="350rem">
                        <div class="productheading">BUTTER</div>
                        <div class="buttertext">Obtained from the fresh dairy milk, cooking butter is rich in fat
                            and adds flavour to the food.</div>
                        <div><a class="butterread" href="../project/butter.htm">Read More</a></div>
                    </div>

                    <div class="paneer"><img src="images/paneer.png" width="350rem">
                        <div class="productheading">PANEER</div>
                        <div class="paneertext">Paneer plays an important part in every vegetarians life. paneer
                            is so soft that it wobbles even at the slightest touch.</div>
                        <div><a class="paneerread" href="../project/paneer.htm">Read More</a></div>
                    </div>
                </div>
            </div>

            <div id="processtab" class="processtab">

                <H1 class="heading">PROCESSING</H1>

                <div class="processbuttons">
                    <button id="btn1">Procurement</button>
                    <button id="btn2">Processing</button>
                    <button id="btn3">Packaging</button>
                    <button id="btn4">Logistics</button>
                </div>

                <div id="processflex" class="processflex">

                    <div id="processcontent">

                        <div id="procurement">
                            <h1>Milk Procurement</h1>
                            <p class="procurcontent">Quality of the dairy depends on the quality of the
                                milk procured. This has made milk procurement an important function in
                                the modern dairying industry.<br>
                                The quality of milk determines the quality of all its products. This has
                                made milk procurement an important function in the modern dairy industry
                                and our dairy is no exception.
                            </p>
                            <button><a class="readmore" href="../project/process.htm">Read More</a> </button>
                        </div>

                        <div id="processing">
                            <h1>Milk Processing</h1>
                            <p class="procurcontent">Milk contains large number of microorganisms
                                making it perishable. We process our milk at our main dairy in
                                Karnampet, equipped with modern state of the art machineries.<br>
                                Supplied by Tetra- Pak and Imported from Sweden, Our state of the
                                art modern daily plant is equipped with the latest technology and
                                machinery. The present handling capacity of the plant is
                                equivalent to 4.0 lakhs of liquid milk.
                            </p>
                            <button><a class="readmore" href="../project/process.htm">Read More</a></button>
                        </div>

                        <div id="packaging">
                            <h1>Milk and Milk Products Packaging</h1>
                            <p class="procurcontent">Milk and milk products are packed in
                                conducive and controlled environment to maintain the product
                                quality. Higher standard packing materials are used for primary
                                and secondary packaging. All the packing materials are food
                                grade materials which meets the industry standard.<br>
                            </p>
                            <button><a class="readmore" href="../project/process.htm">Read More</a></button>
                        </div>

                        <div id="logistics">
                            <h1>Milk Logistics</h1>
                            <p class="procurcontent">Processed & hygienically packed Hemoly milk is transported through
                                insulated trucks to various parts inside the city & the other urban
                                locations.<br>
                                Throughout the distribution, safety of the pack is constantly checked
                                for. Equipped with a good distribution network in the parts of Jodhpur
                                and Jaipur, our packages reach the stores on time.
                            </p>
                            <button><a class="readmore" href="../project/process.htm">Read More</a></button>
                        </div>

                        <div id="start">
                            <h1>Hello Customer</h1>
                            <p class="startcont">To know how we do processing here in Hemoly corp you can either watch
                                video or read about it by clicking above options.
                            </p>
                            <button><a class="readmore" href="../project/process.htm">Read More</a></button>
                        </div>
                    </div>

                    <div id="slider">

                        <video id="video3" controls height="80%">
                            <source src="../project/media/milk.mp4" type="video/mp4">
                            your browser doesnot support html video.
                        </video>

                        <div class="slideshow1">
                            <img src="../project/images/producement1.jpg" class="slideimage">
                        </div>

                        <div class="slideshow2">
                            <img src="../project/images/processing1.jpg" alt="processing1.jpg" class="slideimage1">
                        </div>

                        <div class="slideshow3">
                            <img src="../project/images/packaging1.jpg" alt="packaging1.jpg" class="slideimage2">
                        </div>

                        <div class="slideshow4">
                            <img src="../project/images/logistics2main.jpg" alt="logistics1main.jpg" class="slideimage3">
                        </div>


                    </div>

                </div>

                <div id="branchescontainer" class="branchescontainer">

                   <a style="text-decoration: none" href="../project/branches.htm"> <H1 class="headingbranches">BRANCHES</H1></a><hr><hr>
                    <div class="branchesflex">
    
                        <div class="container1">
                            <div class="card1">
                                <div class="jodhpur">
                                    <img class="img" src="../project/images/JODHPUR.jpg" alt="jodhpur">
                                </div>
                                <div class="info1">
                                    <h1 class="title">jodhpur</h1>
                                    <h3>our Main HeadQuaters</h3>
                                    <h4>Near Loco Road Ratanada</h4>
                                    <h4>&copy;</h4>
                                </div>
                            </div>
                        </div>
        
                        <div class="container2">
                            <div class="card2">
                                <div class="udaipur">
                                    <img class="img" src="../project/images/udaipur.jpg" alt="udaipur">
                                </div>
                                <div class="info2">
                                    <h1 class="title">Udaipur</h1>
                                    <h3>Secondary HeadQuarter</h3>
                                    <h4>Near GandhiNagar</h4>
                                    <h4>&copy;</h4>
                                </div>
                            </div>
                        </div>
    
                        <div class="container3">
                            <div class="card3">
                                <div class="jaipur">
                                    <img class="img" src="../project/images/jaipur.jpeg" alt="jaipur">
                                </div>
                                <div class="info3">
                                    <h1 class="title">Jaipur</h1>
                                    <h3>OUR Main Factories</h3>
                                    <h4>Near Main City</h4>
                                    <h4>&copy;</h4>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    
                </div>

            </div>

      

        </div>


    </main>

    <footer id="footer">

        <div id="time"></div>
        <div class="footerflex">
            <div class="contactdetail">
                <a href="../project/contact.php" style="text-decoration: none" ><h1 style="color: white;" class="contacthref">Contact Details</h1></a> -->
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

</body>

<script type="text/javascript" src="../project/javascript/hemoly.js"></script>

</html>





