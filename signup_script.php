
<?php
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
?>
<?php
//mysqli_select_db($con, $store);   
$uname = $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$addr = $_POST['address'];
//echo $addr;
//echo $uname;
$data= "select * from users where NAME = '$uname' && PASSWORD = '$password'";
$result=mysqli_query($con,$data)or die(mysqli_erro($con));
$count= mysqli_num_rows($result);
//echo $count;
if($count==1)
  {
       echo"alredy you have an account";
  }
  else
  {
       $user_registration_query = "INSERT INTO `users`( `NAME`, `EMAIL`, `PASSWORD`, `CONTACT`, `CITY`, `ADDRESS`) VALUES ( '$uname', '$email', '$password','$contact','$city','$addr')";
    //echo $user_registration_query;
    if(mysqli_query($con, $user_registration_query)) 
    {
         $_SESSION['user_name']=$uname;
        echo"Successfully inserted";
        header('location:login.php');
    }
 else {
       echo "not insert"; 
    }

  }
  ?>
 



