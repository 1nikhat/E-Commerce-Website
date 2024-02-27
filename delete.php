<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
error_reporting(0);
$eml=$_SESSION['email'];
       
?>
<?php
if(isset($_SESSION['email']))
{
    $sql = "DELETE FROM `users` WHERE   Email = '$eml'"; 
if(mysqli_query($con, $sql)){ 
    session_unset();
    echo "Record was deleted successfully."; 
    header('location:login.php');
}  
}
?>


