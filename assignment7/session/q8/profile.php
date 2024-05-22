<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <h1>User Profile</h1>
    <?php
    require_once('db-connect.php');
    session_start();

    if (!isset($_SESSION['email'])) {
        header('Location: login.php');
        exit();
    }

    if (isset($_POST['submit'])) {
        $newPassword = $_POST['new_password'];
        $email = $_SESSION['email'];

        $updateQuery = "UPDATE qeight SET password='$newPassword' WHERE email='$email'";
        if ($conn->query($updateQuery) === TRUE) {
            $msg = "Password updated successfully!";
        } else {
            $error = "Error updating password: " . $conn->error;
        }
    }
    ?>
    <form action="" method="post">
        <label for="">New Password:</label>
        <input type="password" name="new_password" required><br>

        <input type="submit" name="submit" value="Update Password">
    </form>
    <p><a href="dashboard.php">Back to Dashboard</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
