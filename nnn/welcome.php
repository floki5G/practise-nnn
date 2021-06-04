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
       <link rel="stylesheet" href="welcome.css">
       <!-- font  -->
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
       <!-- font  -->
   </head>
   <body>
   <?php
include "cone.php";
$sql = "select * from nav";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>

   <!-- third block starts -->
   <div class="x">

        <div class="xx">
        <?php    while($row = mysqli_fetch_assoc($result)){?>
            <div class="xxx">
                <a id="xxxx" href="gallery.html\gallery.html"> <img  src="imgs\uplode\<?php echo $row['welcomeimg'];?>" alt="error">
                </a>
            </div>
            <?php }  }?>

            <div class="xxx">
                <div class="xxx_x">welcome to
                    copypen</div>
                <div class="xxx_xx">this painting
                    look like real one</div>
            </div>
        </div>
    </div>
    <!-- third block ends  -->
    </body>
    </html>