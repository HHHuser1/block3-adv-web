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
    <!-- <a href="?action=showParts">View Parts</a>
    <a href="?action=showUsers">View brands</a>
    <a href="?action=showPartTypeName">View part types</a>
    <a href="?action=showCompatibility">View compatiblities</a> -->

    <div class="links">
        <a href="?action=showAddBrandForm">Add Brand</a>
        <a href="?action=showBrands">View Brands</a>

        <a href="?action=showAddPartTypeForm">Add Part Type</a>
        <a href="?action=showPartTypes">View part types</a>
    
        <a href="?action=showAddCompatibilityForm">Add Compatibility</a>
        <a href="?action=showCompatibility">View Compatibility</a>

        <a href="?action=showAddPartsForm">Add Parts</a>
        <a href="?action=showParts">View Parts</a>
    </div>




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
        
        // ini_set('display_errors', '1');
        // ini_set('display_startup_errors', '1');
        // error_reporting(E_ALL);

        // // include_once("controllers/controller.php");
        // include_once("controllers/brand_controller.php");
        // include_once("controllers/parttype_controller.php");
        // include_once("controllers/compatibility_controller.php");
        // include_once("controllers/parts_controller.php");

        
        // include_once 'controllers/connection.php';
        // $connection = new brandConnectionObject($host, $username, $password, $database);
        // $connection = new partTypeConnectionObject($host, $username, $password, $database);
        // $connection = new compatibilityConnectionObject($host, $username, $password, $database);
        // $connection = new partsConnectionObject($host, $username, $password, $database);
        // // $controller = new Controller($connection2);



        // $brand_controller = new BrandController($connection);
        // $brand_controller->handleRequest();

        // $parttype_controller = new PartTypeController($connection);
        // $parttype_controller->handleRequest();

        // $compatibility_controller = new CompatibilityController($connection);
        // $compatibility_controller->handleRequest();

        // $parts_controller = new PartsController($connection);
        // $parts_controller->handleRequest();





        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     if (isset($_GET['action']) && $_GET['action'] === 'addBrand') {
        //         $brandName = $_POST['brandName'];
        //         $controller->addBrand($brandName);
        //     }
        // }
        
        // // Check if the "add brand" action is requested
        // if (isset($_GET['action']) && $_GET['action'] === 'showAddBrandForm') {
        //     include 'views/brands_add_form.php';
        // }

        // if (isset($_GET['action']) && $_GET['action'] === 'showUpdateBrandForm') {
        //     $brandID = $_GET['brandID'];
        //     $controller->showUpdateBrandForm($brandID);
        // }

        // // Check if the "update brand" action is requested
        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'updateBrand') {
        //     $brandID = $_GET['brandID'];
        //     $brandName = $_POST['brandName'];
        //     $controller->updateBrand($brandID, $brandName);
        // }

        
        // Display brands
        // $brand_controller->showBrands();



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
