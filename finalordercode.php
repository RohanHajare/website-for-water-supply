 

<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "adminpanel";  
    $con = new mysqli($servername, $username, $password, $db_name);
    if($con->connect_error){
        die("Connection failed".$conn->connect_error);
        echo "Connection failed";
    }
    

    // include('admin/config/dbcon.php');
// include('admin/config/connection.php');
// include('buynow.php');
// include('cart.php');

// if(isset($_POST['Proceed_to_Payment']))
// {

   
    
//     $name=$_POST['fname'];
   
//     $phone=$_POST['phone'];
//     $email=$_POST['email'];
//     $address=$_POST['address'];
//     // $city=$_POST['city'];
//     $total_price=$_POST['Subtotal'];
//     $Pro_name=$_SESSION['p_name'];
//     $Pro_qty=$_SESSION['p_count'];
    
    
//     $users_query="INSERT INTO orders (name,phone,email,address,products,qty,total) VALUES( '$name','$phone','$email','$address',$Pro_name,$Pro_qty,$total_price)";
//     $users_query_run=mysqli_query($con,$users_query);
//     if($users_query)
//     {
//         header('location:cart.php');
//     }
//     else
//     {
//         $_SESSION['status']="User Registration failed";
//         header('location:register.php');

//     }

// }




include('admin/config/connection.php');

if (isset($_POST['Proceed_to_Payment'])) {
    // Get the form data
    // $userid = $_POST['userid'];
    
    $fname = $_POST['fname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $Pro_name=$_SESSION['p_name'];
    $Pro_qty=$_SESSION['p_count'];
    $total_price=$_SESSION['total'];

    // // Insert the data into the orders table
    $insert_query = "INSERT INTO orders (name, phone, email,address,products,qty,total) 
                     VALUES ( '$fname','$phone', '$email','$address','$Pro_name','$Pro_qty','$total_price')";
    $insert_result = mysqli_query($con, $insert_query);

    if ($insert_result) {
        // Data inserted successfully
        // header("location:finalorder.php");
        echo  '<script>
        alert("Order Placed Successfully...!Please do payment")
        window.location.href = "finalorder.php";
    </script>';
    } else {
        // Error in inserting data
        echo "Error: " . mysqli_error($con);
    }
}



?>
