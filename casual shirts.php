<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual shirts</title>
    <link rel="stylesheet" href="casual shirts.css">
    <link rel="icon" href="images/Asset 1@3x-8 1 (2).png">
</head>
<body>
<?php
$con = mysqli_connect("localhost","u825258066_maas","Maasdatabase@123","u825258066_maas");

$ret=mysqli_query($con,"SELECT * FROM backend where id=3");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

$json_data = $row["json"];
$res = json_decode($json_data);
?>
<?php

$ret1=mysqli_query($con,"SELECT * FROM images where id=1");
$num1=mysqli_num_rows($ret1);
if($num1>0){
$cnt1=1;
while ($row1=mysqli_fetch_array($ret1)) {

$json_data1 = $row1["json"];
$res1 = json_decode($json_data1);
?>
    <main class="Desktop">
        <section id="formal shirts">
            <section class="first-page">
                <header>
                    <nav class="nav-1">
                        <img src="images/Logo.png" alt="logo">
                    </nav>
                    <nav class="nav-2">
                        <ul class="side-options">
                            <li><a href="Index.html" class="nav-link" style="text-decoration: none;">Home</a></li>
                            <li><a href="About us.html" class="nav-link" style="text-decoration: none;">About Us</a></li>
                            <li><a href="Our missions.html" class="nav-link" style="text-decoration: none;">Our Mission</a></li>
                            <li><a href="#" class="nav-link" style="text-decoration: none;">Products ▼</a>
                            <ul class="dropdown">
                                <li><a href="school uniforms.php">School Uniforms</a></li>
                                <li><a href="hospital uniforms.html">Hospital Uniforms</a></li>
                                <li><a href="hotel uniform.html">Hotel Uniforms</a></li>
                                <li><a href="#">Shirts</a>
                                <ul>
                                    <l><a href="formal shirts.php">Formal shirts</a></l>
                                    <l><a href="casual shirts.php">Casual shirts</a></l>
                                </ul>
                                </li>
                                <li><a href="t shirts.html">T-Shirts</a></li>
                            </ul>
                            </li>
                            <li><a href="contact.html" class="nav-link" style="text-decoration: none;">Contact Us</a></li>
                        </ul>
                    </nav>
                </header>
                <div>
                    <img class="fir-pic" src="uploads/<?php echo $res1->image21 ?>" alt="">
                </div>
                <div class="first-title">
                    <h1><?php echo $res->header->header1 ?> <br> <?php echo $res->header->header2 ?></h1>
                </div>
                <div class="disc-1">
                    <h1 style="color: white;">Get started</h1>
                </div>
                <div class="sec-bg">
                    <img class="sec-bg-pic" src="uploads/<?php echo $res1->image22 ?>" alt="">
                    <h1 class="sec-pic-h1" style="color: black;"><?php echo $res->content->content_header ?></h1>
                    <div class="blue-line">
                        <img src="About images/Rectangle 9 (1).png" alt="">
                    </div>
                    <p class="p-1"><?php echo $res->content->content_description ?></p>
                    <p class="p-2" style="color: gray;"><?php echo $res->content->content_quote ?></p>
                </div>
        </section>
    </main>
    <main>
        <section class="second">
            <div class="card-container">
                <div class="card-1">
                    <img class="card-pic" src="uploads/<?php echo $res1->image23 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card1 ?></b> <br><?php echo $res->card->card11 ?></p>
                </div>
                <div class="card-1">
                    <img class="card-pic" src="uploads/<?php echo $res1->image24 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card2 ?></b> <br><?php echo $res->card->card22 ?></p>
                </div>
                <div class="card-1">
                    <img class="card-pic" src="uploads/<?php echo $res1->image25 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card3 ?></b> <br><?php echo $res->card->card33 ?></p>
                </div>
                <div class="card-1">
                    <img class="card-pic" src="uploads/<?php echo $res1->image26 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card4 ?></b> <br><?php echo $res->card->card44 ?></p>
                </div>
            </div>
            <div class="card-container-2">
                <div class="card-2">
                    <img class="card-pic" src="uploads/<?php echo $res1->image27 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card5 ?></b> <br><?php echo $res->card->card55 ?></p>
                </div>
                <div class="card-2">
                    <img class="card-pic" src="uploads/<?php echo $res1->image28 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card6 ?></b> <br><?php echo $res->card->card66 ?></p>
                </div>
                <div class="card-2">
                    <img class="card-pic" src="uploads/<?php echo $res1->image29 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card7 ?></b> <br><?php echo $res->card->card77 ?></p>
                </div>
                <div class="card-2">
                    <img class="card-pic" src="uploads/<?php echo $res1->image30 ?>" alt="">
                    <p class="card-content-p"> <b><?php echo $res->card->card8 ?></b> <br><?php echo $res->card->card88 ?></p>
                </div>
            </div>
        </section>
    </main>
    <main>
        <section class="arabi">
            <h1 class="arabic-txt">Specialized In Saudi School Uniforms</h1>
        </section>
    </main>
    <main>
        <section class="Details">
            <img class="rec" src="images/Rectangle 9.png" alt="">
            <iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.7688166446537!2d80.24716520639949!3d13.113826804128738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265bce9f5a1d5%3A0x6dc7a0d02879b961!2sChinnaiyan%20Colony%2C%20Perambur%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1727765067446!5m2!1sen!2sin"  width="450" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div>
            <div class="login-container">
                <h2>Contact Us</h2>
                <form>
                  <!-- Name Input -->
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                  </div>
                  
                  <!-- Email Input -->
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                  </div>
            
                  <!-- What You Say (Message) Textarea -->
                  <div class="form-group">
                    <label for="message">What You Say</label>
                    <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
                  </div>
                  <button type="submit" class="submit-btn">Submit</button>
        </div>
        </section>
    </main>
    <main>
        <section class="footer">
            <div class="footer-1">
            </div>
            <div class="footer-2">
            </div>
            <div class="footer-content">
                <h1 class="ft-txt"><span style="color: navy;">Ready to get started?</span><br>Talk to us today</h1>
            </div>
            <div class="disc-2">
                <h1 style="color: white;">Get started</h1>
            </div>
            <footer>
                <div class="ft-1">
                    <h4>About MAAS</h4>
                    <ul>
                        <li><a href="Index.html">Home</a></li> <br>
                        <li><a href="About us.html">About us</a></li> <br>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
                <div class="ft-1">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="school uniforms.php">School uniform</a></li> <br>
                        <li><a href="hospital uniforms.php">Hospital uniform</a></li> <br>
                        <li><a href="casual shirts.php">Shirts</a></li> <br>
                        <li><a href="t shirts.html">T-Shirts</a></li>
                    </ul>
                </div>
                <div class="ft-1">
                    <h4>Address</h4>
                    <ul>
                        <li><a href="https://www.google.com/maps/search/?api=1&query=No.26+Chinnaiya+New+Colony,+1st+Main+Road,+Perambur,+Chennai+-+600011,+India" target="_blank">No.26, Chinnaiya New Colony, 1st Main Road, Perambur, Chennai - 600 011.
                                India</a></li> <br>
                        <li><a href="tel:+919840222332">+91 98402 22332</a></li>
                        <li><a href="tel:+919381112777">+91 93811 12777</a></li>
                        <li><a href="tel:+918754464928">+91 87544 64928</a></li>
                    </ul>
                </div>
            </footer>
            </div>
            <div class="copyright">
                <h5 style="margin-bottom: -400px;">copyright@ 2024 Maas all rights reserved Design and Developed by SynapseSpark </h5>
            </div>
            <div>
                <img class="ft-logo" src="images/Group 1000001738.png" alt="">
            </div>
        </section>
    </main>
    <main>
        <section class="mobile">
            <div class="main-container">
                <div class="frame">
                  <div class="card-image">
                    <div class="content">
                      <div class="image-rounded">
                        <div class="portrait-young-boy"></div>
                      </div>
                      <div class="frame-1">
                        <div class="content-text">
                          <span class="title-cotton"><?php echo $res->card->card1 ?></span
                          ><span class="text-description"
                            ><?php echo $res->card->card11 ?>
                          </span>
                        </div>
                        <div class="x-button">
                          <div class="button-variants">
                            <div class="btn-solid-base"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-2">
                    <div class="content-3">
                      <div class="image-rounded-4"><div class="stylish-kid"></div></div>
                      <div class="frame-5">
                        <div class="content-text-6">
                          <span class="title-polyester"><?php echo $res->card->card2 ?></span
                          ><span class="text-description-7"
                            ><?php echo $res->card->card22 ?>
                          </span>
                        </div>
                        <div class="x-button-8">
                          <div class="button-variants-9">
                            <div class="btn-solid-base-a"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-b">
                    <div class="content-c">
                      <div class="image-rounded-d">
                        <div class="cute-girl-smiling"></div>
                      </div>
                      <div class="frame-e">
                        <div class="content-text-f">
                          <span class="title-cotton-polyester-blend"
                            ><?php echo $res->card->card3 ?></span
                          ><span class="text-section"
                            ><?php echo $res->card->card33 ?>
                          </span>
                        </div>
                        <div class="x-button-10">
                          <div class="button-variants-11">
                            <div class="btn-solid-base-12"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-13">
                    <div class="content-14">
                      <div class="image-rounded-15">
                        <div class="happy-expression"></div>
                      </div>
                      <div class="frame-16">
                        <div class="content-text-17">
                          <span class="title-section"><?php echo $res->card->card4 ?></span
                          ><span class="text-section-18"
                            ><?php echo $res->card->card44 ?>
                          </span>
                        </div>
                        <div class="x-button-19">
                          <div class="button-variants-1a">
                            <div class="btn-solid-base-1b"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-1c">
                  <div class="card-image-1d">
                    <div class="content-1e">
                      <div class="image-rounded-1f">
                        <div class="college-girl-photo"></div>
                      </div>
                      <div class="frame-20">
                        <div class="content-text-21">
                          <span class="title-section-22"><?php echo $res->card->card5 ?></span
                          ><span class="text-section-23"
                            ><?php echo $res->card->card55 ?>
                          </span>
                        </div>
                        <div class="x-button-24">
                          <div class="button-variants-25">
                            <div class="btn-solid-base-26"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-27">
                    <div class="content-28">
                      <div class="image-rounded-29">
                        <div class="school-uniform-jumping"></div>
                      </div>
                      <div class="frame-2a">
                        <div class="content-text-2b">
                          <span class="title"><?php echo $res->card->card6 ?></span
                          ><span class="text"
                            ><?php echo $res->card->card66 ?>
                          </span>
                        </div>
                        <div class="x-button-2c">
                          <div class="button-variants-2d">
                            <div class="btn-solid-base-2e"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-2f">
                    <div class="content-30">
                      <div class="image-rounded-31">
                        <div class="joyful-schoolgirl-standing"></div>
                      </div>
                      <div class="frame-32">
                        <div class="content-text-33">
                          <span class="title-34"><?php echo $res->card->card7 ?></span
                          ><span class="text-35"
                            ><?php echo $res->card->card77 ?>
                          </span>
                        </div>
                        <div class="x-button-36">
                          <div class="button-variants-37">
                            <div class="btn-solid-base-38"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-image-39">
                    <div class="content-3a">
                      <div class="image-rounded-3b">
                        <div class="girl-preparing-school"></div>
                      </div>
                      <div class="frame-3c">
                        <div class="content-text-3d">
                          <span class="title-3e"><?php echo $res->card->card8 ?></span
                          ><span class="text-3f"
                            ><?php echo $res->card->card88 ?>
                          </span>
                        </div>
                        <div class="x-button-40">
                          <div class="button-variants-41">
                            <div class="btn-solid-base-42"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="frame-43">
                  <div class="specialized-in-saudi">
                    <span class="specialized-in-saudi-school"
                      >Specialized in Saudi School</span
                    ><span class="empty"> </span
                    ><span class="specialized-in-saudi-school-44">Uniforms</span>
                  </div>
                </div>
                <div class="rectangle">
                  <span class="contact-us">Contact Us </span>
                  <div class="rectangle-45"><span class="name">Name</span></div>
                  <div class="rectangle-46"><span class="email">Email</span></div>
                  <div class="rectangle-47">
                    <span class="what-you-wanna-say">what you wanna say ?</span>
                  </div>
                  <div class="rectangle-48"><span class="submit">Submit</span></div>
                </div>
                <span class="ready-to-get-started">Ready to get started?</span
                ><span class="talk-to-us-today">Talk to us today</span>
                <div class="rectangle-49">
                  <span class="get-started">get started</span>
                </div>
                <div class="rectangle-4a">
                  <div class="flex-row-d">
                    <span class="about-maas">ABOUT MAAS</span
                    ><span class="product">PRODUCT</span>
                  </div>
                  <div class="flex-row-b">
                    <a href="./Index.html" class="home">Home</a
                    ><a href="./school uniforms.html" class="school-uniform">School Uniform</a>
                  </div>
                  <div class="flex-row-bba">
                    <a href="About us.html" class="about-us">About Us</a
                    ><a href="./hospital uniforms.html" class="hospital-uniform">Hospital Uniform</a>
                  </div>
                  <div class="flex-row-eb">
                    <a href="./contact.html" class="contact-us-4b">Contact Us</a
                    ><a href="./casual shirts.html" class="shirts">Shirts</a>
                  </div>
                  <a href="./t shirts.html" class="t-shirts">T Shirts</a
                  ><span class="address">Address</span
                  ><span class="address-details"
                    >No.26, Chinnaiya New Colony, 1st Main Road, Perambur, Chennai - 600
                    011. India</span
                  ><span class="contact-info">+91 98402 22332</span>
                  <span class="contact-info">+91 93811 12777</span>
                  <span class="contact-info">+91 93811 12777</span>
                  <div class="rectangle-4c">
                    <div class="asset"></div>
                    <span class="maas">MAAS</span>
                    <div class="line"></div>
                    <div class="line-4d"></div>
                    <div class="line-4e"></div>
                  </div>
                  <span class="copyright-text"
                    >copyright@ 2024 Maas all rights reserved Design and Developed by
                    SynapseSpark
                  </span>
                </div>
                <div class="flex-row-a">
                  <!-- Rectangle Container -->
                  <div class="rectangle-4f">
                    <!-- Logo and Menu Icon Row -->
                    <div class="flex-row-a-50">
                      <div class="asset-51"></div> <!-- Logo/Asset Icon -->
                      <div class="menu">
                        <div class="icon" id="hamburger-icon"></div> <!-- Hamburger Icon -->
                      </div>
                    </div>
                    
                    <!-- Main Branding Text -->
                    <span class="maas-apparels">
                      <?php echo $res->header->header1 ?><br /><?php echo $res->header->header2 ?>
                    </span>
                    
                    <!-- Get Started Button -->
                    <div class="rectangle-52">
                      <span class="get-started-53">Get Started</span>
                    </div>
                  </div>
                
                  <!-- Front View Image Placeholder -->
                  <div class="front-view-image"></div>
                
                  <!-- Off-Canvas Navigation Menu -->
                  <nav class="navbar" id="navbar">
                    <!-- Close Icon -->
                    <div class="close-icon" id="close-icon">&#10005;</div>
                    
                    <!-- Navigation Links -->
                    <ul class="nav-links">
                      <li><a href="Index.html" class="nav-link">Home</a></li>
                      <li><a href="About us.html" class="nav-link">About Us</a></li>
                      <li><a href="Our missions.html" class="nav-link">Our Mission</a></li>
                      <li>
                        <a href="#" class="nav-link">Products ▼</a>
                        <ul class="dropdown">
                          <li><a href="school uniforms.html">School Uniforms</a></li>
                          <li><a href="hospital uniforms.html">Hospital Uniforms</a></li>
                          <li><a href="hotel uniform.html">Hotel Uniforms</a></li>
                          <li>
                            <a href="#">Shirts</a>
                            <ul class="dropdown">
                              <li><a href="formal shirts.html">Formal shirts</a></li>
                              <li><a href="casual shirts.html">Casual shirts</a></li>
                            </ul>
                          </li>
                          <li><a href="t shirts.html">T-Shirts</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html" class="nav-link">Contact Us</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="flex-row-c">
                  <div class="rectangle-54">
                    <span class="uniform-description"
                      ><?php echo $res->content->content_description ?></span
                    ><span class="uniform-benefits"
                      ><?php echo $res->content->content_quote ?></span
                    >
                    <div class="rectangle-55">
                      <span class="get-started-56">get started</span>
                    </div>
                    <span class="school-uniform-57"><?php echo $res->content->content_header ?></span>
                    <div class="rectangle-58"></div>
                  </div>
                  <div class="girl-with-backpack"></div>
                </div>
                <div class="man-choosing-clothes"></div>
                <div class="image"></div>
              </div>
        </section>
    </main>
<?php 
$cnt1=$cnt1+1;
} } else { echo "No Datas";}?> 
<?php 
$cnt=$cnt+1;
} } else { echo "No Datas";}?>
                
</body>
<script>// Select elements
  const hamburgerIcon = document.getElementById('hamburger-icon');
  const closeIcon = document.getElementById('close-icon');
  const navbar = document.getElementById('navbar');
  
  // Open navbar
  hamburgerIcon.addEventListener('click', () => {
    navbar.classList.add('active');
  });
  
  // Close navbar
  closeIcon.addEventListener('click', () => {
    navbar.classList.remove('active');
  });
  </script>
</html>