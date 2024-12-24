<?php
$con=mysqli_connect("localhost","root","","annas420");

$id = $_GET['abc'];

$query=mysqli_query($con,"select *from product where id='$id'");
$data =mysqli_fetch_assoc($query);

if(isset($_POST['btn'])){
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $query =mysqli_query($con,"delete from `product` where id=$id");
    header("Location:index.php");
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
    <form action="" method="post">
        
        <input type="text" value="<?php echo $data['name']?>" name = "name">
        <input type="text" value="<?php echo $data['email']?>" name = "email">
        <button type="submit" name="btn">Submit</button>

</body>
</html>