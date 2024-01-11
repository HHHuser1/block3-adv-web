<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);



include_once 'models/brand_model.php';

class BrandController {
    private $brand_model;

    public function __construct($connection) {
        $this->brand_model = new brandModel($connection);
    }

    public function handleRequest() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_GET['action']) && $_GET['action'] === 'addBrand') {
                $brandName = $_POST['brandName'];
                $this->addBrand($brandName);
            }   
        }


        // if (isset($_GET['action']) && $_GET['action'] === 'updateBrand') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'updateBrand') {
            $brandID = $_POST['brandID'];
            $brandName = $_POST['brandName'];
            $this->updateBrand($brandID, $brandName);
        }
        

        // Check if the "show part types" action is requested
        if (isset($_GET['action']) && $_GET['action'] === 'showBrands') {
            $BrandName = $this->brand_model->getBrands();
            $this->showBrands($BrandName);
        }

        // Check if the "add brand" action is requested
        if (isset($_GET['action']) && $_GET['action'] === 'showAddBrandForm') {
            $this->showAddBrandForm();
        }

        if (isset($_GET['action']) && $_GET['action'] === 'showUpdateBrandForm') {
            $brandID = $_GET['brandID'];
            $this->showUpdateBrandForm($brandID);
        }
    }



    public function showAddBrandForm() {
        include 'views/brand_add_form.php';
    }


    public function addBrand($brandName) {

        $result = $this->brand_model->insertBrand($brandName);

        if ($result) {
            $_SESSION['success_message'] = "Brand added successfully!";
        } else {
            $_SESSION['error_message'] = "Error adding brand.";
        }

        header("Location: ?action=showBrands");
        exit();
    }


    public function showBrands() {
        $brands = $this->brand_model->getBrands();
        include 'views/brand_show.php'; 
    }

    public function showUpdateBrandForm($brandID) {
        $brand = $this->brand_model->getBrandByID($brandID);
        include 'views/brand_update_form.php';
    }

    public function updateBrand($brandID, $brandName) {
        // Check if the "Cancel" button was clicked
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelUpdate'])) {
            header("Location: ?action=showBrands");
            exit();
        }

        $result = $this->brand_model->updateBrand($brandID, $brandName);

        if ($result) {
            $_SESSION['success_message'] = "Brand updated successfully!";
        } else {
            $_SESSION['error_message'] = "Error updating brand.";
        }

        // Redirect back to the index page
        header("Location: ?action=showBrands");
        exit();
    }















}



























?>