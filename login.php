<?php
session_start();
$a=$_SESSION['email'];
$b=$_SESSION['password'];

if(isset($_POST['btn'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if($email==$a && $password==$b) {
        header("location: welcome.php");
    } else {
        echo "Invalid email or password!";
    
}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
        <form method="POST" action="">
        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="<?php echo ($a); ?>" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" name=btn value="Login">
        </form>
</body>
</html>