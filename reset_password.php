<!-- reset_password.php -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('config.php');
require_once('./phpmailer/vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

        if(mysqli_affected_rows($conn) > 0) {
            $mail = new PHPMailer(true);
            
            // Configure PHPMailer
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            $mail->Username = "pinmanee.business@gmail.com";
            $mail->Password = "jvplssmpdvnaeywc";
            $mail->isHTML(true);

            $mail->setFrom("pinmanee.business@gmail.com");
            $mail->addAddress($email);
            $mail->Subject = "Password Reset";
            $mail->Body = "Click <a href='http://example.com/reset-password.php?token=$token'>here</a> to reset your password.";

            try {
                $mail->send();
                echo "Message sent, please check your inbox";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Failed to update reset token.";
        }
    } else {
        echo "No user found with that email address.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h2>Forgot Password</h2>

    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>
