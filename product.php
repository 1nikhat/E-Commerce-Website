
<html>
    
    <body>
<?php
    
    $con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
    session_start();
    $sql="SELECT * FROM `USER_ITEMS`";
    if($con)
    {
        $result=  mysqli_query($con, $sql);
        $rows_count= mysqli_num_rows($result);
        if($rows_count==0)
        {
            echo "Cart Empty";
        }
        else
        {
            header('location:product_show.php');
        }
    }
    ?>
    </body>
    <footer>
    <?php include("footer.php"); ?>
    </footer>
</html>


