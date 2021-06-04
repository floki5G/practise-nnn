<?php include "cone.php";
session_start();
?>
<?php

    $tokan = $_GET['tokan'];
    $sql = "update data set status = 'active' where tokan = '{$tokan}'";
    mysqli_query($conn,$sql) or die('fuck');
     $_SESSION['tname']= $_GET['tokan'];


     header("location: {$hostname}/nnn/login.php");

?>