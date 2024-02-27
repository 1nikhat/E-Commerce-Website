<?php

//include 'common.php';
session_start();
 
/*if (!isset($_SESSION['email']))
{
  header('location:index.php');
 
}*/

$con = mysqli_connect("localhost", "root")or die(mysqli_error($con));
mysqli_select_db($con, 'store');

if(isset($_POST['Submit']))
{
        $useremail = mysqli_real_escape_string($con,$_POST['email']);
        $oldpassword =$_POST['oldpassword'];
        $newpassword = $_POST['newpassword'];
        $re_password = $_POST['confirmnewpassword'];
       
        $result = mysqli_query($con,"SELECT PASSWORD FROM users WHERE EMAIL='$useremail'");
        //echo $result;
        
        		$chg_pwd1=mysqli_fetch_array($result);
		$data_pwd=$chg_pwd1['PASSWORD'];
                //echo $data_pwd;
		if($data_pwd==$oldpassword){
		if($newpassword==$re_password){
                    if(strlen($newpassword)<20 || strlen($newpassword)>4)
                    {
                       
			$update_pwd=mysqli_query($con,"UPDATE users SET password='$newpassword' where email='$useremail'");
                        if($update_pwd)
                        {
                            echo "<script>alert('Update Sucessfully'); "
                            . "window.location='login.php'</script>";
                        }    
                    }    
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); "
                    . "window.location='setting.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong');"
                    . " window.location='setting.php'</script>";
                }
}       
       
            
            
   
?>