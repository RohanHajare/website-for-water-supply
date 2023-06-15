<?php
$host="localhost";
$username="root";
$password='';

$database="adminpanel";

//connection
$con= mysqli_connect("$host","$username","$password","$database");

//check connection
if(!$con)
{
    header("location: ../error/db.php");
    die();
}
// else
// {
//     echo"database connected";
// }

$sql="select * from product";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
 $re=$result;

}
?>

