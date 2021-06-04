<?php
$conn = mysqli_connect('localhost','root','','nnn');
if($conn->connect_error){
    die($conn->connect_error);
}
else{
    echo "done";
}
?>