<?php
require_once 'database.php';

// Function to check user login credentials
function checkUserLogin($username) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Function to register a new user
function registerUser($username, $email, $hashed_password, $profile_pic) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (username, email, password, profile_pic) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $email, $hashed_password, $null);
    $stmt->send_long_data(3, $profile_pic);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}
?>
