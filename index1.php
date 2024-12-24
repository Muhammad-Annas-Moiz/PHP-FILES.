<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Cookie Form</title>
</head>
<body>
    <h1>Enter Your Details</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    // Step 2: Handle Form Submission and Set Cookies
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        
        // Set cookies for 1 day (86400 seconds)
        setcookie("user_name", $name, time() + (86400 * 1), "/");
        setcookie("user_email", $email, time() + (86400 * 1), "/");
        
        echo "<h2>Cookies have been set!</h2>";
    }
    ?>

    <?php
    // Step 3: Display Cookies if They Exist
    if (isset($_COOKIE['user_name']) && isset($_COOKIE['user_email'])) {
        echo "<h2>Welcome back, " . htmlspecialchars($_COOKIE['user_name']) . "!</h2>";
        echo "<p>Your email is: " . htmlspecialchars($_COOKIE['user_email']) . "</p>";
    }
    ?>
</body>
</html>