<?php
$con =mysqli_connect("localhost","root","","phpannas");
if (isset($_FILES['file'])){
    $name=$_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

print_r($_FILES);

$temp = $_FILES['file']['tmp_name'];
$file_name=$_FILES['file']['name'];
$final="file/".$file_name;

move_uploaded_file($temp,$final);
$query=mysqli_query($con,"insert into annasmoiz values('$name','$email','$age','$final')");
header("location:fetch.php");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method=post enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required min="1"><br><br>
        <input type="file" name="file">

        <input type="submit" value="Submit">
    </form>

</body>
</html>
</body>
</html>