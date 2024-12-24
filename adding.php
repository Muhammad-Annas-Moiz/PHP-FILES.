<?php
$con=mysqli_connect("localhost","root","","annas420");
if (isset($_FILES['file'])){
    $id=$_POST['id'];
    $productName=$_POST['productName'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

print_r($_FILES);

$temp = $_FILES['file']['tmp_name'];
$file_name=$_FILES['file']['name'];
$final="file/".$file_name;

move_uploaded_file($temp,$final);
$query=mysqli_query($con,"insert into product values('$id','$productName','$description','$price','$quantity','$final')");
header("location:view.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}

.form-container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: auto;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin: 10px 0 5px;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 5px;
}

fieldset {
    border: none;
    margin: 10px 0;
    padding: 0;
}

legend {
    font-weight: bold;
    color: #333;
}

button {
    background-color: #5cb85c;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
}

button:hover {
    background-color: #4cae4c;
}
h1{
    background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
        margin:0px;
}
</style>
<body>
<h1>Product Form</h1>

<form action="" method=post enctype="multipart/form-data">
<label for="id">ID:</label><br>
<input type="number" id="id" name="id"><br><br>

  <label for="productName">Product Name:</label><br>
  <input type="text" id="productName" name="productName"><br><br>

  <label for="description">Description:</label><br>
  <textarea id="description" name="description"></textarea><br><br>

  <label for="price">Price:</label><br>
  <input type="number" id="price" name="price"><br><br>

  <label for="quantity">Quantity:</label><br>
  <input type="number" id="quantity" name="quantity"><br><br>

  <label for="image">Image URL:</label><br>
  <input type="file" id="file" name="file"><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>