<?php
include('logincode.php');
require_once ("php/header.php"); 
// session_start();
require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("adminpanel","Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        // print_r($_SESSION['cart']);
    }
}


?>

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
            <li>
            
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
           
            </li>
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
    




<?php require_once ("php/header.php"); ?>
<div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['water_quantity'], $row['bottle_quantity'], $row['price'],$row['image'],$row['id']);
                }
            ?>
        </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- partial -->
    <script src="script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>

  </main>

  <footer class="footer">
    <div class="footer__addr">
      <h1 class="footer__logo"><img src="images/Quara-logo.png" alt="Quara-logo"></h1>

      <h2>Contact</h2>

      <address>
        5534 Somewhere In. The World 22193-10212<br>

        <a class="footer__btn" href="mailto:gursaleprathmesh1234@gmail.com">Email Us</a>
      </address>
    </div>

    <ul class="footer__nav">
      <li class="nav__item">
        <h2 class="nav__title">Media</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Online</a>
          </li>

          <li>
            <a href="#">Print</a>
          </li>

          <li>
            <a href="#">Alternative Ads</a>
          </li>
        </ul>
      </li>

      <li class="nav__item nav__item--extra">
        <h2 class="nav__title">Technology</h2>

        <ul class="nav__ul nav__ul--extra">
          <li>
            <a href="#">Hardware Design</a>
          </li>

          <li>
            <a href="#">Software Design</a>
          </li>

          <li>
            <a href="#">Digital Signage</a>
          </li>

          <li>
            <a href="#">Automation</a>
          </li>

          <li>
            <a href="#">Artificial Intelligence</a>
          </li>

          <li>
            <a href="#">IoT</a>
          </li>
        </ul>
      </li>

      <li class="nav__item">
        <h2 class="nav__title">Legal</h2>

        <ul class="nav__ul">
          <li>
            <a href="#">Privacy Policy</a>
          </li>

          <li>
            <a href="#">Terms of Use</a>
          </li>

          <li>
            <a href="#">Sitemap</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="legal">
      <p>&copy; 2019 Quara.All rights reserved.</p>

      <div class="legal__links">
        <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
      </div>
    </div>
  </footer>
  <script src="java.js"></script>
</body>

</html>