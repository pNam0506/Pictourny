<!-- reset_password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('config.php');
        
        $email = $_POST['email'];

        // Check if the email exists in the database
        $query = "SELECT * FROM sign_up WHERE users_Email = '$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            // Generate a random password reset token
            $token = bin2hex(random_bytes(32));

            // Update the user's record in the database with the token
            $update_query = "UPDATE sign_up SET reset_token_hash = '$token' WHERE users_Email = '$email'";
            mysqli_query($conn, $update_query);

            // Send an email to the user with a link to reset their password
            $reset_link = "http://yourwebsite.com/reset_password_form.php?token=$token";
            $message = "Click the following link to reset your password: $reset_link";
            // You can use a library like PHPMailer to send emails
            // Example: https://github.com/PHPMailer/PHPMailer
            // mail($email, 'Password Reset', $message);

            echo "An email has been sent with instructions to reset your password.";
        } else {
            echo "No user found with that email address.";
        }
    }
    ?>

    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>

