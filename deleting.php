<?php
$con=mysqli_connect("localhost","root","","annas420");

$id = $_GET['abc'];
if(isset($_POST['btn'])){
   
    $id=$_POST['id'];
    $query =mysqli_query($con,"delete from `product` where id='$id'");
    header("Location:view.php");
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
        <form action="" method=post enctype="multipart/form-data">
<label for="id">ID:</label><br>
<input type="number" id="id" name="id" value="<?php echo $data['id']?>"><br><br>

  <input type="submit" value="Delete" name="btn">
</form>
</body>
</html>