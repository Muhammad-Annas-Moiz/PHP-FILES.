<?php
$con=mysqli_connect("localhost","root","","annas");
$query=mysqli_query($con,"select * from student");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        <?php
        while($data=mysqli_fetch_assoc($query)){

            echo '<tr>
            <td>'.$data['id'].'</td>
            <td>'.$data['name'].'</td>
            <td>'.$data['email'].'</td>
            <td><a href="edit.php?abc='.$data['id'].'">Edit</a></td>
            <td><a href="delete.php?abc='.$data['id'].'">delete</a></td>
            </tr>';}
       ?>
</body>
</html>