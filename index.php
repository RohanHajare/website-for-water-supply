<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quara Aqua</title>
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/My_project.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <link rel="stylesheet" href="stylecart.css" />
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="cartstyle.css">
</head>

<body>
<div class="nav1" style="z-index:1;">
    <header>

      <section id="header">
        <a href="#">
          <img class="logo" src="images/Quara-logo.png" alt="Quara logo">
        </a>
        <div>
          <ul id="navbar">
            <li><a class="active1" href="index.php">Home</a></li>
            <li><a class="active1" href="product.php">product</a></li>
            <li><a href="brands.html" target="">Brands</a></li>
            <!-- <li><a href="profile.html" target="">Profile</a></li> -->
            <!-- <li><a href="login.html" target="">Login</a></li> -->
            <li><a href="contact.html" target="">Contact Us</a></li>
            <!-- <li>
            
                  <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
           
            </li> -->
            <li><div class="action">
              <div class="profile" onclick="menuToggle();">
                  <img src="images/user.png" alt="">
              </div>
      
              <div class="menu">
                  <h2>
                      <!-- User Account -->
                      <?php
                 if(isset( $_SESSION['auth']))
                 {
                  echo $_SESSION['auth_user']['user_name'] ;
                 }
                 ?>
                      
                      <div>
                     
                      </div>
                  </h2>
                  <ul>
                      <li class="profile1">
                          <span class="material-icons icons-size">person</span>
                          <a href="profile1.php">My Profile</a>
                      </li>
                      <!-- <li class="profile1">
                          <span class="material-icons icons-size">mode</span>
                          <a href="#">Edit Account</a>
                      </li> -->
                      <li class="profile1">
                          <span class="material-icons icons-size">login</span>
                          <a href="signup.html">Register Now</a>
                      </li>
                      <li class="profile1">
                          <span class="material-icons icons-size">login</span>
                          <a href="login.php">Log In</a>
                      </li>
                      <li class="profile1">
                          <span class="material-icons icons-size">logout</span>

                          <a href="index.php">Log Out
                          <?php
                            unset($_SESSION['auth']);
                           
                          ?>
                          </a>
                          
                          
                      </li>
                      <!-- <li>
                          <span class="material-icons icons-size">account_balance</span>
                          <a href="#">Finance</a>
                      </li>
                      <li>
                          <span class="material-icons icons-size">account_balance_wallet</span>
                          <a href="#">Wallet</a>
                      </li> -->
                  </ul>
              </div>
          </div></li>
          </ul>
        </div>
      </section>
    </header>
  </div>
  <main>
    <!-- partial:index.partial.html -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>


    <div id="wrapper">

      <!-- <h1>Simple Image Slider</h1>
      <h2>A Pen by <a href="http://www.andrecortellini.com" target="_blank">André Cortellini</a></h2> -->

      <div id="slider-wrap">
        <ul id="slider">
          <li data-color="#1abc9c">
            <div>
              <!-- <h3>Slide #1</h3>
                    <span>Sub-title #1</span> -->
            </div>
            <a href="#bisleri">
            <img src="images/bisleri (1) (2).jpg" alt="">
          </a>
            <!-- <i class="fa fa-image"></i> -->
          </li>

          <li data-color="#3498db">
            <div>
              <!-- <h3>Slide #2</h3>
                    <span>Sub-title #2</span> -->
            </div>
            <img src="images/aquafina.png" alt="">
            <!-- <i class="fa fa-gears"></i> -->
          </li>

          <li data-color="#9b59b6">
            <div>
              <!-- <h3>Slide #3</h3>
                    <span>Sub-title #3</span> -->
            </div>
            <img src="images/bailley (1) (2).png" alt="">
            <!-- <i class="fa fa-sliders"></i> -->
          </li>

          <li data-color="#34495e">
            <div>
              <!-- <h3>Slide #4</h3>
                    <span>Sub-title #4</span> -->
            </div>
            <img src="images/kinley.jpg" alt="">
            <!-- <i class="fa fa-code"></i> -->
          </li>

          <li data-color="#e74c3c">
            <div>
              <!-- <h3>Slide #5</h3>
                    <span>Sub-title #5</span> -->
            </div>
            <img src="images/vedica_banner (1).jpg" alt="">
            <!-- <i class="fa fa-microphone-slash"></i> -->
          </li>


        </ul>

        <!--controls-->
        <div class="btns" id="next"><i class="fa fa-arrow-right"></i></div>
        <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>
        <div id="counter"></div>

        <div id="pagination-wrap">
          <ul>
          </ul>
        </div>
        <!--controls-->

      </div>

    </div>
</body>
</html>