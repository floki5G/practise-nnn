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
<?Php
include "cone.php";
$sql = "select * from nav ";
$result = mysqli_query($conn,$sql) or die();
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
    
?>
<table>
    <tr>
            <th> id</th>
            <th>  icon  </th>
            <th> change </th>
            <th>welcome img</th>
    </tr>
    <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['logo'];?></td>
            <td><a href="edit.php">logo-edit</a> </td>
            <td><a href="welcomeimg.php">welcome-img</a></td>
    </tr>
    <?php } }?>
    </table>

    
</body>
</html>