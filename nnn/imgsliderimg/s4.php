<?php
include "cone.php";
?>
<?php
if(isset($_FILES['s4'])){
    include "cone.php";
  
    $name = $_FILES['s4']['name'];
    $type =$_FILES['s4']['type'];
    $tmp_name=$_FILES['s4']['tmp_name'];
    $size=$_FILES['s4']['size'];
    move_uploaded_file($tmp_name,"sliderimg/".$name);
    $sql = "update nav set s4 = '{$name}'";
    mysqli_query($conn,$sql);
}
?>   <form action="" method="POST"  enctype="multipart/form-data" >
  <input type="file" name="s4">
    <input type="submit" name="ss4"  value = "s4">

</form >