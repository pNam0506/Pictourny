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
    die("Token has expired");
}

echo "Token is valid and hasn't expired";

?>
