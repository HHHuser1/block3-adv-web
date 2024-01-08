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

    <style>
        *{
            box-sizing: border-box;
        }
        body{
            padding: 20px;
            /* padding: 20px; */
            font-family: Arial, Helvetica, sans-serif;
        }
        /* .container{
            max-width: 1200px;
            width: 90%;
            margin: 0 auto;
        } */

        label{
            display: block;
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 0px;
        }
        input,
        select,
        option,
        button{
            padding: 5px;
            margin: 8px auto;
            border-radius: 5px;
            background-color: #f2f2f2;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
            /* box-sizing: border-box; */
        }

    
        input[type=text],
        input[type=number]{
            padding: 5px;
            background-color: aliceblue;
            color: black;
            font-size: 16px;
            width: 100%;
            border-radius: 5px;
            margin: 10px auto;
            cursor:auto;
        }
        
        button,
        input[type=submit],
        input[type=reset]{
            width: 50%;
            min-width: 70px;
            background-color: #D1D1D1;

        }

        /* #delete_button{
            background-color: #FF5555;
            color: white;
        } */

        p{
            font-size: 18px;
            margin: 12px auto;
        }
        a{
            text-decoration: none;
            text-transform: uppercase;
            color: black;
            font-size: 18px;
            font-weight: bold;
            margin: 18px auto;
            border-radius: 5px;
            background-color: lightblue;
            padding: 8px 14px ;
            display: inline-flex;

        }
        form{
            max-width: 300px;
            padding: 10px;
            
        }


        /* .list{
            display: grid;
            grid-gap: 10px;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }
        .items{
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
        } */

    </style>
</head>
<body>
    <h1>Project 1 - MVC and mySQL - Computer builder</h1>
    <p><a href="./index.php">Click here for forms to add Parts, Brands, Types, Compatibility</a></p>
    <a href="?action=showParts">View Parts</a>
    <a href="?action=showUsers">View brands</a>
    <a href="?action=showPartTypeName">View part types</a>
    <a href="?action=showCompatibility">View compatiblities</a>


    <?php

        // Check for a success message
        if (isset($_SESSION['success_message'])) {
            echo '<p style="color: green; font-size: 24px; font-weight: bold; margin: 20px auto; border:3px solid green;">' . $_SESSION['success_message'] . '</p>';
            unset($_SESSION['success_message']); // Clear the message to avoid displaying it on subsequent requests
        }
    ?>

    <?php
        
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        include_once("controllers/controller.php");
        
        include_once 'controllers/connection.php';
        $connection2 = new connectionObject($host, $username, $password, $database);
        $controller = new Controller($connection2);

        // Handle form submissions and actions
        // if(isset($_POST['submit'])) {
        //     // $controller->add();
        // } elseif(isset($_POST['update'])) {
        //     $brandID = $_POST['brandID'];
        //     $controller->update($brandID);
        // // } elseif(isset($_POST['delete'])) {
        // //     $brandID = $_POST['brandID'];
        // //     $controller->deleteBrand($brandID);
        // // }

        // }

        // if (isset($_GET['status'])) {
        //     $status = $_GET['status'];
            
        //     // Display a success message or handle other statuses
        //     if ($status === 'success') {
        //         echo "<p>Brand added successfully!</p>";
        //     }
        // }


            // Check for a success message
            // if (isset($_SESSION['success_message'])) {
            //     echo '<p style="color: green; font-size: 24px; font-weight: bold">' . $_SESSION['success_message'] . '</p>';
            //     unset($_SESSION['success_message']); // Clear the message to avoid displaying it on subsequent requests
            // }


            




        // $controller->showParts();
        // $controller->showUsers();
        // $controller->showPartTypeName();
        // $controller->showCompatibility();
        
    ?>
</body>
</html>
