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
    <link rel="stylesheet" href="login.css">
</head>
<body>
<?php
include "cone.php";
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);
   print_r($pass);
    $sql = "select * from data where username = '{$user}' and password = '{$pass}' and status = 'active'";
    $result = mysqli_query($conn,$sql);
   

    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
           $_SESSION['user']= $row['username'];
           $_SESSION['pass']= $row['password'];
           if(isset($_POST['remine'])){
            setcookie('usercook',$user);
            setcookie('passcook',$pass);  

             }
            }
            
   header("location: nav.php");
   }
}

    
    
?>
    <form action="" method = "post">
        <div class="x">

                <div class="xx">

                                    <div id="xx">
                                        <div>username</div>
                                    <input type="text" name= "user" VALUE = "<?php if(isset($_COOKIE['usercook'])){
                                        echo $_COOKIE['usercook'];}?>">
                                    </div>
                                    <div id="xx">
                                        <div>password</div>
                                    <input type="password" name="pass" VALUE = "<?php if(isset($_COOKIE['passcook'])){
                                        echo $_COOKIE['passcook'];}?>">
                                    </div>
                                    <div id="x">
                                    <input type="checkbox" name="remine">remember me

                                    </div>
                                    <div id="xx" class="xxxxx">
                                    <input type="submit" name="submit" value = "login" >
                                       <a href="forget.php">forget password</a>
                                    </div>
                </div>
            <div class="xxx">
                        <div id="xxx">
                        <a href="newuser.php">dont have account</a>
                        </div>

            </div>
    </div>

    </form>
</body>
</html>
