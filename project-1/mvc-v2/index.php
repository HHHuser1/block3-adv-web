<!-- <?php 
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC with MySQL</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    
    <div class="title">
        <h1>Haitham B</h1>
        <h1>Project 1 - MVC and mySQL - Computer builder</h1>
        <p><a href="./index.php">Main Page with Views and Forms</a></p>
    </div>

    
    
    <?php 
        include 'views/nav_links.php';
    ?>


    <?php

        // Check for a success message
        if (isset($_SESSION['success_message'])) {
            echo '<p style="color: green; font-size: 24px; font-weight: bold; margin: 20px auto; border:3px solid green;">' . $_SESSION['success_message'] . '</p>';
            unset($_SESSION['success_message']); // Clear the message to avoid displaying it on subsequent requests
        }
        if (isset($_SESSION['error_message'])) {
            echo '<p style="color: red; font-size: 24px; font-weight: bold; margin: 20px auto; border:3px solid red;">' . $_SESSION['error_message'] . '</p>';
            unset($_SESSION['error_message']); // Clear the message to avoid displaying it on subsequent requests
        }

    ?>

    <?php

    include_once 'controllers/controller.php';
        
        
    ?>
</body>
</html>
