<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include("header.inc");
?>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
<p>You have successfully logged in.</p>
<a href="logout.php">Logout</a>

<?php include("footer.inc"); ?>
