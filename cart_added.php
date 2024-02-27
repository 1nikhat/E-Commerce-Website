
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
<?php
session_start();
$userid = $_get['USER_ID'];
$itemid = $_get['ITEM_ID'];
$status = $_get['STATUS'];
$uname = $_SESSION['user_name'];
?>
<?php

if($con)
{
    $submit="insert into `user_items`( `USER_ID`, `ITEM_ID`, `STATUS`) VALUES ($userid','$itemid','$status')";
    if(mysqli_query($con,$submit))
    {
         header('location:product.php');
    }
    
}

?>


