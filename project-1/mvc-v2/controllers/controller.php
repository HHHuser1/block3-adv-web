<?php 

        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        // include_once("controllers/controller.php");
        include_once("controllers/brand_controller.php");
        include_once("controllers/parttype_controller.php");
        include_once("controllers/compatibility_controller.php");
        include_once("controllers/parts_controller.php");

        
        include_once 'controllers/connection.php';
        $connection = new brandConnectionObject($host, $username, $password, $database);
        $connection = new partTypeConnectionObject($host, $username, $password, $database);
        $connection = new compatibilityConnectionObject($host, $username, $password, $database);
        $connection = new partsConnectionObject($host, $username, $password, $database);
        // $controller = new Controller($connection2);



        $brand_controller = new BrandController($connection);
        $brand_controller->handleRequest();

        $parttype_controller = new PartTypeController($connection);
        $parttype_controller->handleRequest();

        $compatibility_controller = new CompatibilityController($connection);
        $compatibility_controller->handleRequest();

        $parts_controller = new PartsController($connection);
        $parts_controller->handleRequest();


?>