<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo $_SESSION['user']; ?>!</h1>
 <a href= "main.php">click me! </a>

 <a href="logout.php">Logout</a>



</body>
</html>