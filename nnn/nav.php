    <?php
include "cone.php";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="nav.css">
        <!-- icon  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- icon  --> 
            <!-- google font  -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <!-- google font  -->
    </head>
    <body>
<?php
include "cone.php";
$sql = "select * from nav";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>

    <ul class="nav">
        <li >
           <div class="nav_2">
               <?php    while($row = mysqli_fetch_assoc($result)){?>
           <div class="logo1">
             
                     <img src="imgs/uplode\<?php echo $row['logo'];?>" alt="error">

           </div>
    <?php }  }?>

              <p class="logo2"> copypen</p>
           </div>
        </li>
        <li class="nav_2">
                    <div class="nav_con">
                    <span>
                             <i class="fa fa-phone-square"></i>
                    </span>
                    <span>
                             <p>
                                  phone
                            </p>
                             <p>
                                  6267064847
                            </p>
                    </span>

                  </div>
                  <div class="nav_con">
                        <span>
                            <i class="fa fa-envelope"></i>
                        </span>
                        <span>
                            <p>
                                email
                            </p>
                            <p>
                                sv629688@gmail.com
                            </p>
                        </span>
                            
                  </div>
         </li>
    </ul>

  </header>
        </body>
    </html>