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
    </head>
    <body>
    <?php
           include "cone.php";
            
          
                      if(isset($_FILES['image'])){
                            $name =   $_FILES['image']['name']; 
                            $type =   $_FILES['image']['type']; 
                            $tmp_name =   $_FILES['image']['tmp_name']; 
                            $size =   $_FILES['image']['size']; 
                            move_uploaded_file($tmp_name,'imgs\uplode/'.$name );
                            $sql1 = "update nav set logo = '{$name}'";
                            $result1 = mysqli_query($conn,$sql1);
                       }
                
?>
        <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" id="x">
                <input type="submit" name ="submit" id="xx">
        </form>  


</body>
 </html>



