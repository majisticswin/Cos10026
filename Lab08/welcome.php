<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['user'])) {
    // Show personalised welcome message
    echo "<h2>Welcome, " . htmlspecialchars($_SESSION['user']) . "!</h2>";
    echo "<p>You have successfully logged in.</p>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    // Redirect to login page if not logged in
    header("Location: login.html");
    exit();
}
?>
