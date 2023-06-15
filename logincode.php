<?php
session_start();
    include('admin/config/connection.php');
   
    if (isset($_POST['submit'])) 
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * from user WHERE email = '$username' AND password = '$password' LIMIT 1";  
        $result = mysqli_query($con,$sql);  
        // $roww = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // $count = mysqli_num_rows($result);  
        
        if(mysqli_num_rows($result) > 0 && $username!="rohan@gmail.com" && $password!="123")
        {


            // echo"login successfull";
        //      foreach($result as $row)
        //      {
        //         $user_id=$row['id'];
        //         $user_name=$row['name'];
        //         $user_phone=$row['phone'];
        //         $user_email=$row['email'];
               
        //   }
        //   $_SESSION['auth'] = true;
        //   $_SESSION['auth_user'] =[
        //     'user_id'=> $user_id,
        //     'user_name'=> $user_name,
        //     'ser_phone'=> $user_phone,
        //     'user_email'=> $user_email

        //   ];
           
         
          foreach($result as $row)
          {
          $user_name=$row['name'];
          $userid=$row['id'];
          }
         
          $_SESSION['auth'] = true;
          $_SESSION['auth_user'] =['user_name'=> $user_name];
          $_SESSION['auth_userid'] =['user_id'=> $userid];
          header("location:product.php");
          
        }
        elseif($username=="rohan@gmail.com" && $password=="123")
        {
            $_SESSION['auth'] = true;
            header("location:admin/index.php");
        }
        else
        {  
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
          $_SESSION['status']="Invalid Email Or Password ";

        }     
    }

// session_start();
// include('admin/config/connection.php');

// if (isset($_POST['submit'])) 
// {
//     $username = mysqli_real_escape_string($con, $_POST['user']);
//     $password = mysqli_real_escape_string($con, $_POST['pass']);

//     $sql = "SELECT * from user WHERE email = '$username' AND password = '$password' LIMIT 1";  
//     $result = mysqli_query($con, $sql);  
    
//     if(mysqli_num_rows($result) > 0)
//     {
//         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//         $user_name = $row['name'];
        
//         $_SESSION['auth'] = true;
//         $_SESSION['auth_user'] = [
//             'user_name' => $user_name
//         ];
        
//         header("location:index.php");
//         exit();
//     }
//     elseif($username == "rohan@gmail.com" && $password == "123")
//     {
//         $_SESSION['auth'] = true;
//         header("location:admin/index.php");
//         exit();
//     }
//     else
//     {  
//         $_SESSION['status'] = "Invalid Email Or Password";
//         header("location: login.php?error=1");
//         exit();
//     }     
// }


    ?>