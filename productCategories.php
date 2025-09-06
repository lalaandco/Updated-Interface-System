<?php
session_start();
$isLoggedIn = isset($_SESSION["email"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="Categories.css">
    <!-- Add other CSS files as needed -->
</head>
<body>
    <?php include 'header.php'; ?>
    
    <!-- Your page content goes here -->
    
</body>
</html>