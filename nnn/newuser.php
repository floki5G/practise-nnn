<?php
include "cone.php";
session_start();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="newuser.css">
 </head>
 <body>

 <?php
include "cone.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $conn_pass = md5($_POST['connpass']);
    $tokan= bin2hex(random_bytes(15));

if($pass == $conn_pass){
    $sql2= "select * from data where username = '{$user}' and email = '{$email}'";
    $result2 = mysqli_query($conn,$sql2) or die("fuck");
    if(mysqli_num_rows($result2)>0){
        echo"user name or email alrady exixt";
    }else{

  $sql = "insert into data(name,username,email,password,tokan,status)
    value ('{$name}','{$user}','{$email}','{$pass}','{$tokan}','inactive')";
$result= mysqli_query($conn,$sql) or die("fuck");

$sub = "simple mail";
$body = " https://localhost/nnn/activate.php?tokan=$tokan";
$head = "from: sv629688@gmail.com";
    if(mail($email,$sub,$body,$head)){
       echo "<script>alert('please confirm your email')</script>";
 }
}
}
else{
    echo "<script>alert('password should be same')</script>";
   }
}
?>
     
     <form action="" method="post">
         <div class="x">
                   <div  class="xx" id = "xx">
                          <div> name</div>
                          <input type="text" name="name">
                   </div>
                     <div  class="xx">
                            <div>username </div>
                              <input type="text" name="username">
                     </div>
                      <div  class="xx">
                            <div>  email</div>
                            <input type="email" name="email">
                   </div>
                     <div class="xx">
                            <div>   pass   </div>
                              <input type="password" name="pass">
                     </div>
                      <div class="xx">
                          <div>  confirm  pass </div>
                           <input type="password" name="connpass">
                      </div>
                        <div id = "xxx">
                        <input type="submit" name= "submit" value="done">

                        </div>
        </div>

     </form>
     </body>
 </html>