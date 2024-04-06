<?php

if (!isset($_GET['token'])) {
    die("Token parameter is missing.");
}

$token = $_GET['token'];
$token_hash = hash("sha256", $token);

require_once('config.php');

$sql = "SELECT * FROM sign_up WHERE reset_token_hash = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Failed to prepare statement: " . $conn->error);
}

$stmt->bind_param('s', $token_hash);

$stmt->execute();

$result = $stmt->get_result();
if (!$result) {
    die("Error executing query: " . $stmt->error);
}

$user = $result->fetch_assoc();

if ($user === null) {
    die("Token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    echo "
    <!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    
    <form method='post' action='./process_reset_password.php'>
    <!-- Include a hidden input field to send the token value -->
    <input type='hidden' name='token' value='$token'>
    <label for='password'>New Password:</label>
    <input type='password' name='new-password' id='password' required><br><br>

    <label for='confirm_password'>Confirm Password:</label>
    <input type='password'name='new-confirm_password' id='confirm_password' required><br><br>

    <input type='submit' value='Reset Password'>
</form>
</body>
</html>
";
}
?>
