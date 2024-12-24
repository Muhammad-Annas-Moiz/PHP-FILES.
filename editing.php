<?php
$con=mysqli_connect("localhost","root","","annas420");

$id = $_GET['abc'];


if(isset($_POST['btn'])){
  $_FILES['file'];
  $productName=$_POST['productName'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];
  $query=mysqli_query($con,"UPDATE `product` SET `product_name`='$productName',`description`='$description',`price`='$price',`quantity`='$quantity',`image`='$final' WHERE `ID`= $id");
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
<h1>update Form</h1>

<form action="" method=post enctype="multipart/form-data">
<label for="id">ID:</label><br>
<input type="number" id="id" name="id" value=<?php echo $data['ID'] ?>>><br><br>

  <label for="productName">Product Name:</label><br>
  <input type="text" id="productName" name="productName" value=<?php echo $data['product_name'] ?>>><br><br>

  <label for="description">Description:</label><br>
  <textarea id="description" name="description" value=<?php echo $data['description'] ?>>></textarea></textarea><br><br>

  <label for="price">Price:</label><br>
  <input type="number" id="price" name="price" value=<?php echo $data['price'] ?>>><br><br>

  <label for="quantity">Quantity:</label><br>
  <input type="number" id="quantity" name="quantity" value=<?php echo $data['quantity'] ?>>><br><br>

  <label for="image">Image URL:</label><br>
  <input type="file" id="file" name="file" value=<?php echo $data['image'] ?>>><br><br>

  <input type="submit" value="update" name="btn">
</form>
</body>
</html>