<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s3'])){
    include "cone.php";
  
    $name = $_FILES['s3']['name'];
    $type =$_FILES['s3']['type'];
    $tmp_name=$_FILES['s3']['tmp_name'];
    $size=$_FILES['s3']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s3 = '{$name}'";
    mysqli_query($conn,$sql);
}
?>   <form action="" method="POST"  enctype="multipart/form-data" >

<input type="file" name="s3" >
<input type="submit" name="ss3"  value = "s3">
</form >