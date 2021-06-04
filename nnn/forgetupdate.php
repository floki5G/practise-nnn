<?php
include "cone.php";
?>

<?php
if(isset($_POST['submit'])){
    if(isset($_GET['id'])){

      $id = $_GET['id'];
       

      $pass = md5($_POST['pass']);
      $connpass = md5($_POST['connpass']);
      
      $sql = "update data set password = '$pass' where id = '{$id}'";
      
          if(mysqli_query($conn,$sql)){
      
      header("location: {$hostname}/nnn/login.php");
          }


    }
    else{
        echo "fuck";
    }




}
else{
    echo "fuccck";
}
?>


<form action="" method ="POST">
<input type="password" name ="pass">
<input type="password" name ="connpass">
<input type="submit" name= "submit" value="done">


</form>