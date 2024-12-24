<?php
$con=mysqli_connect("localhost","root","","annas420");
$query=mysqli_query($con,"select * from product");
?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, td{
        border: 1px solid black;
        height: 50px;
        text-align: center;
        justify-content: center;
        width: 100%;
    }
    img{
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
    }
    header{
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
    }
    a.link-button{
        background-color: #4caf50;
        color: white;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transition: background-color 0.3s ease;
        margin-left:45%
    }
</style>
<body>
    <header>
    <H1>PRODUCT LIST</H1>
    </header>
    <a href="adding.php" class="link-button">ADD PRODUCT</a>
    <table>
        <?php
    while($data=mysqli_fetch_assoc($query)){
        ?>
<table>
    <tr>
        <th><h1>id</h1></th>
        <th><h1>name</h1></th>
        <th><h1>Description</h1></th>
        <th><h1>price</h1></th>
        <th><h1>quantity</h1></th>
        <th><h1>Image</h1></th>
        <th><h1>update</h1></th>
        <th><h1>delete</h1></th>
    </tr>
<tr>    
  <th><h2><?php echo $data['ID']?></h2></th>
    <th><h2><?php echo $data['product_name']?></h2></th>
    <th><h2><?php echo $data['description']?></h2></th>
    <th><h2><?php echo $data['price']?></h2></th>
    <th><h2><?php echo $data['quantity']?></h2></th>
    <Th><img src="<?php echo $data['image']?>"></Th>
    <th><a href="editing.php?abc='.$data['ID'].'"><button>update</button></a></th>
    <th><a href="deleting.php?abc='.$data['ID'].'"><button>delete</button></a></th>
    </tr>
        <?php
    }
        ?>
        </table>
        
</body>
</html>