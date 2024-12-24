<?php
$con=mysqli_connect("localhost","root","","phpannas");
$query=mysqli_query($con,"select * from annasmoiz");

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
    img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
    div.container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>
<body>
    <table>
        <?php
    while($data=mysqli_fetch_assoc($query)){
        ?>
<form>
    <h1><?php echo $data['name']?></h1>
    <h2><?php echo $data['email']?></h2>
    <p><?php echo $data['age']?></p>
    <img src="<?php echo $data['file']?>" alt="">
    <a href="update.php">
  <button>update</button>
</a>
    </form>
        <?php
    }
        ?>
        </table>
        
</body>
</html>