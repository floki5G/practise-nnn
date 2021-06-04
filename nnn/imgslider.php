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
    <link rel="stylesheet" href="imgslider.css">
</head>
<body>
    <?php

$sql ="select * from nav ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
<!-- six-block start  -->
<div>

<div class="z">
    <div class="zz">
        <input type="radio" id="radio1" name="n" checked>
        <input type="radio" id="radio2" name="n">
        <input type="radio" id="radio3" name="n">
        <input type="radio" id="radio4" name="n">
        <input type="radio" id="radio5" name="n">
        <input type="radio" id="radio6" name="n">

        <?php    while($row = mysqli_fetch_assoc($result)){?>
        <img id="six_one" src="imgsliderimg/sliderimg\<?php  echo $row['s1'] ?>" alt="error">
        <img id="six_two" src="imgsliderimg/sliderimg\<?php  echo $row['s2'] ?>" alt="error">
        <img id="six_three" src="imgsliderimg/sliderimg\<?php  echo $row['s3'] ?>" alt="error">
        <img id="six_four" src="imgsliderimg/sliderimg\<?php  echo $row['s4'] ?>" alt="error">
        <img id="six_five" src="imgsliderimg/sliderimg\<?php  echo $row['s5'] ?>" alt="error">
        <img id="six_six" src="imgsliderimg/sliderimg\<?php  echo $row['s6'] ?>" alt="error">
     <?php   } } ?>
    </div>




    <div class="navm">
        <label for="radio1" class="nav_m"> </label>
        <label for="radio2" class="nav_m"> </label>
        <label for="radio3" class="nav_m"> </label>
        <label for="radio4" class="nav_m"> </label>
        <label for="radio5" class="nav_m"> </label>
        <label for="radio6" class="nav_m"> </label>
    </div>


</div>
</div>
<!-- six-block start  -->
</body>
</html>