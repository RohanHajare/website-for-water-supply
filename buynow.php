<?php
include('admin/config/connection.php');
include("logincode.php");


    if(isset($_SESSION['auth']))
    {
        $_SESSION['status']="You are alreaady logged in";
        header('location:index.php');
    }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/My_project.png" type="image/x-icon">
    <link rel="stylesheet" href="buynow.css">
    <script src="script.js"></script>
    <title>Buy Now</title>
</head>

<body>
    <div class="container">
        <div class="title">
            <h2>Product Order Form</h2>
        </div>
        <div class="d-flex">
            <form action="finalordercode.php" method="post">
          
                <?php
                if(isset($_GET['userid']))
                {
                    
                $userid=$_GET['userid'];
                $query="SELECT * FROM user WHERE id='$userid' LIMIT 1";
                $query_run=mysqli_query($con,$query);
                if(mysqli_num_rows( $query_run) >0)
                {
                foreach($query_run as $row)
                {
                    ?>
            <input type="hidden" name="userid" value="<?php echo$row['id']?>">
                <label>
                    <span class="fname">Full Name <span class="required">*</span></span>
                    <input type="text" name="fname"  value="<?php echo $row['name']?>">
                </label>
             
                <!-- <label>
                    <span>State<span class="required"></span></span>
                    <input type="text" name="State">
                </label> -->
                <label>
                    <span>Street Address <span class="required">*</span></span>
                    <!-- <input type="textarea" name="houseadd" placeholder="House number and street name" required> -->
                    <textarea name="address" id="" cols="50" rows="10"></textarea>
                </label>
                <!-- <label>
                    <span>&nbsp;</span>
                    <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
                </label> -->
                <!-- <label>
                    <span>Town / City <span class="required">*</span></span>
                    <input type="text" name="city">
                </label> -->
               
                <label>
                    <span>Phone <span class="required">*</span></span>
                    <input type="tel" name="phone" value="<?php echo $row['phone']?>">
                </label>
                <label>
                    <span>Email Address <span class="required">*</span></span>
                    <input type="email" name="email" value="<?php echo $row['email']?> ">
                </label>
                <?php
                $_SESSION['auth']=true;
              }
            }
        }
                 ?>

                <button type="submit" name="Proceed_to_Payment" class="orderbtn">Proceed to Payment</button>
                
            </form>
            
            <div class="Yorder">
                <table>
                    <tr>
                        <th colspan="2">Your order</th>
                    </tr>
                    <tr>
                    <td>Product names</td>
                    <td><?php echo $_SESSION['p_name']?></td>
                    </tr>
                    <tr>
                    <td>total Products</td>
                        <td><?php echo  $_SESSION['p_count']?></td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td name="Subtotal">₹<?php echo $_SESSION['total']?></td>
                    </tr>
                    <tr>
                        <td>Shipping</td>
                        <td>Free shipping</td>
                    
                
                    </tr>
                    
                </table><br>
                
                <div>
                    <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
                </div>
                <p>
                    Make your payment directly into our bank account. Please use your Order ID as the payment reference.
                    Your order will not be shipped until the funds have cleared in our account.
                </p>
                <div>
                    <input type="radio" name="dbt" value="cd"> Cash on Delivery
                </div>
                <div>
                    <input type="radio" name="dbt" value="cd"> Paypal <span>
                        <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg"
                            alt="" width="50">
                    </span>
                </div>
                
                
            </div><!-- Yorder -->
        </div>
      
    </div>

</body>

</html>
