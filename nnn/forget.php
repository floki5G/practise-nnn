<?php
include "cone.php";
?>





<?php
if(isset($_POST['submit'])){
    $user = $_POST['user'];
$sql = "select * from data where username = '{$user}'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    if($row = mysqli_fetch_assoc($result)){
        $email = $row['email'];
        $id = $row['id'];
        print_r($row);
        print_r($email);
        $sub = "simple mail";
$body = " https://localhost/nnn/forgetupdate.php?id=$id";
$head = "from: sv629688@gmail.com";
    if(mail($email,$sub,$body,$head)){
       echo "<script>alert('please confirm your email')</script>";
 }
    }
}




}
?>
<form action="" method ="post">
<input type="text" name ="user">
<input type="submit" name= "submit">


</form>
 