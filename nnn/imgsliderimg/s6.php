<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s6'])){
    include "cone.php";
  
    $name = $_FILES['s6']['name'];
    $type =$_FILES['s6']['type'];
    $tmp_name=$_FILES['s6']['tmp_name'];
    $size=$_FILES['s6']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s6 = '{$name}'";
    mysqli_query($conn,$sql);
}
?>   <form action="" method="POST"  enctype="multipart/form-data" >

<input type="file" name="s6" >
    <input type="submit" name="ss6"  value = "s6">

</form >