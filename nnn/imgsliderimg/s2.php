<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s2'])){
    include "cone.php";
  
    $name = $_FILES['s2']['name'];
    $type =$_FILES['s2']['type'];
    $tmp_name=$_FILES['s2']['tmp_name'];
    $size=$_FILES['s2']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s2 = '{$name}'";
    mysqli_query($conn,$sql);
}
?> 
  <form action="" method="POST"  enctype="multipart/form-data" >

<input type="file" name="s2" >
<input type="submit" name="ss2"  value = "s2">
</form >