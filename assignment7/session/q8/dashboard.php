<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
echo "Welcome, " . $_SESSION['name'] . "!";
echo '<br><a href="profile.php">Profile</a>';
echo '<br><a href="logout.php">Logout</a>';
?>
