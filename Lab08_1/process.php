<?php
session_start();

// Capture form data
$username = $_POST['username'];
$password = $_POST['password'];

$correctUsername = "mitul";
$correctPassword = "105980686"

if ($username === $correctUsername && $password === $correctPassword) {
    // Store username in session
    $_SESSION['user'] = $username;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Redirect back to login with error
    header("Location: login.html?error=1");
    exit();
}
?>
