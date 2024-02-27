<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
?>

<?php
//mysqli_select_db($con, $store);

$email = $_POST['email'];
$password =  $_POST['password'];


$data= "select * from users where Email = '$email' && PASSWORD = '$password'";
$result=mysqli_query($con,$data)or die(mysqli_erro($con));
$count= mysqli_num_rows($result);
//echo $count;
if($count==1)
  {
       $_SESSION['email']=$email;
       echo $_SESSION['email'];
       header('location:product_show.php');
  }
  else
  {
       header('location:login.php');
  }
  ?>
 

