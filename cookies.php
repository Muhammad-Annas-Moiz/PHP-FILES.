<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = ($_POST['name']);
        $email = ($_POST['email']);
        
        setcookie("username", $name, time() + 20, "/");
        setcookie("email", $email, time() + 20, "/");
        
        echo "HOGAYA";
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
<form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>