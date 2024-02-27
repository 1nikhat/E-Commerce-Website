<?php
    $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    if($con)
    {
        echo "connection successfully";
    }
    mysqli_select_db($con, 'store');
    session_start();
    $data = "SELECT  `NAME`, `PRICE` FROM `items` ORDER BY 'ID' ASC ";
    //echo $data;
    $result = mysqli_query($con,$data);
    $count = mysqli_num_rows($result);
    //$count= mysqli_num_rows($data);
        if($count >0)
        {
          while($fetch = mysqli_fetch_array($data));
            {   
                    
              print_r($fetch);
            }   
        } 
 else {
     echo "data not fetch";
 }
 ?>            

