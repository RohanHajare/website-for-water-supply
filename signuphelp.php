 <?php
$hostname="localhost";
$username="root";
$password="";
$database="adminpanel";
$connection = mysqli_connect('localhost','root','','authentication');
if($connection)
{
    echo"connection successfull";
}
else{
    echo "ERROR";
} 


mysqli_select_db($connection,'adminpanel');
$firstname = $_POST['first_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['password'];
// $c_pass = $_POST['conform_password'];


$data = "INSERT INTO user (name,phone,email,password) VALUES ('$firstname', '$phone', '$email','$pass')";
// $data = "INSERT INTO credentials (`FNAME`, `LNAME`, `EMAIL`, `PASSWD`,CPASS)  VALUES ('$firstname,'$lastname', '$email', '$pass')";
mysqli_query($connection,$data);
header('location:signupsuccess.php'); 
?>