
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['btn'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Basic validation
    if ($password !== $confirmPassword) {
        echo 'Passwords do not match!';
        exit;
    }

    // Here you would typically save the user to a database
    // For demonstration, we will just send a verification email

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'mohammad.annas1998@gmail.com';                   
        $mail->Password   = 'cixo cyrz hrbm nuvu';                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
        $mail->Port       = 465;                                   

        // Recipients
        $mail->setFrom('mohammad.annas1998@gmail.com', 'annas moiz');
        $mail->addAddress($email);     

        // Content
        $mail->isHTML(true);                                 
        $mail->Subject = 'Email Verification';
        $verificationLink = "http://yourdomain.com/verify.php?email=" . urlencode($email) . "&token=" . bin2hex(random_bytes(16));
        $mail->Body    = "Please click the link to verify your email: <a href='$verificationLink'>Verify Email</a>";

        $mail->send();
        echo 'Message has been sent. Please check your email for verification.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<?php
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];
}

    // Here you would typically check the token against your database
    // For demonstration, we will just display a success message

    echo "Email verification";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional: Link to your CSS -->
</head>
<body>
    <div class="signup-container">
        <h2>Signup</h2>
        <form id="signupForm" action="signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit" name="btn">Sign Up</button>
        </form>
        <div id="message"></div>
    </div>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                event.preventDefault();
                document.getElementById('message').innerText = "Passwords do not match!";
            }
        });
    </script>
</body>
</html>