<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s5'])){
    include "cone.php";
  
    $name = $_FILES['s5']['name'];
    $type =$_FILES['s5']['type'];
    $tmp_name=$_FILES['s5']['tmp_name'];
    $size=$_FILES['s5']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s5 = '{$name}'";
    mysqli_query($conn,$sql);
}
?>   <form action="" method="POST"  enctype="multipart/form-data" >

<input type="file" name="s5" >
    <input type="submit" name="ss5"  value = "s5">
</form >