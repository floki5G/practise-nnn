
<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s1'])){
    include "cone.php";
  
    $name = $_FILES['s1']['name'];
    $type =$_FILES['s1']['type'];
    $tmp_name=$_FILES['s1']['tmp_name'];
    $size=$_FILES['s1']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s1 = '{$name}'";
    mysqli_query($conn,$sql);
}
?>
   <form action="" method="POST"  enctype="multipart/form-data" >
   <input type="file" name="s1" >
<input type="submit" name="ss1" value = "s1">
</form >