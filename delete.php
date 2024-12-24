<?php

$con=mysqli_connect("localhost","root","","annas");
$id = $_GET['abc'];

$query=mysqli_query($con,"delete from student where id='$id'");
header("location:index.php");
?>