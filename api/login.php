<?php
// Include configuration and start session
include(__DIR__ . '/config.php');
$error_message = ""; // Initialize error message

if (isset($_POST['submit'])) {
    // Escape input values
    $users_Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $users_Password = mysqli_real_escape_string($conn, $_POST['Password']);

    // Query the database
    $result = mysqli_query($conn, "SELECT * FROM Sign_Up WHERE users_Email = '$users_Email' AND users_Password = '$users_Password'");
    $row = mysqli_fetch_assoc($result);

    ob_start();

    if (is_array($row) && !empty($row)) {
        // Set session variables
        $_SESSION['valid'] = $row['users_Email'];
        $_SESSION['username'] = $row['users_Name'];
        http_response_code(302); // หรือ 301 สำหรับ Permanent Redirect
        echo "Redirecting to <a href='./home.php'>home</a>...";
        exit();
        
        // Redirect to home page
        // header("Location: ./home.php");
        // exit(); // Ensure no further script execution
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
</head>

<body>
    <div class="background-login">
        <div class="container">
            <div class="box-login form-box">
                <header id="login">LOGIN</header>
                <img src="../Rectangle 31.png" id="logo">
                <?php if (!empty($error_message)): ?>
                <p><?php echo htmlspecialchars($error_message); ?></p>
                <a href=""><button class="btn-back">Back</button></a>
                <?php endif; ?>
                <form action="" method="post">
                    <div class="field input">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" required>
                    </div>
                    <div class="field input">
                        <label for="Password">Password</label>
                        <input type="password" name="Password" id="Password" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" class="btn" value="Login" required>
                    </div>
                    <div class="link sign-up">
                        <a href="../sign_up.html">Sign Up</a>
                    </div>
                    <div class="link forgot-password">
                        <a href="../reset_password.html">Forgot Password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>