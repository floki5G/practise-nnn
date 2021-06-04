<?php
include "cone.php";
?>
<?php
if(isset($_FILES['img'])){
    include "cone.php";
    $img = $_FILES['img'];
    print_r($_FILES);
    $name = $_FILES['img']['name'];
    $type =$_FILES['img']['type'];
    $tmp_name=$_FILES['img']['tmp_name'];
    $size=$_FILES['img']['size'];
    move_uploaded_file($tmp_name,"imgs\uplode/".$name);
    $sql = "update nav set welcomeimg = '{$name}'";
    mysqli_query($conn,$sql);
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="img">
<input type="submit" name="submit">

</form>