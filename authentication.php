<!-- authenticatoin secutiry login or not code -->
<?php
// session_start();

if(!isset($_SESSION['auth']))
{
    echo  '<script>
        alert("Please Login First")
        window.location.href = "login.php";
    </script>';
   
}
else
{
    $_SESSION['auth']=true;
}
?>