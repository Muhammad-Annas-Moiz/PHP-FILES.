<?php
session_start();

if(isset($_POST['btn'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $email;

    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form method="POST" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" name="btn" value="Sign Up">
    </form>
</body>
</html>