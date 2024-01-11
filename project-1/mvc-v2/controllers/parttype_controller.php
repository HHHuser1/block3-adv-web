<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);




            

    include_once 'models/parttype_model.php';

    class PartTypeController {
        private $parttype_model;
    
        public function __construct($connection) {
            $this->parttype_model = new partTypeModel($connection);
        }
    
        public function handleRequest() {
            // Check if the "add part type" action is requested
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'addPartType') {
                $partTypeName = $_POST['partTypeName'];
                $this->addPartType($partTypeName);
            }
    
            // Check if the "update part type" action is requested
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'updatePartType') {
                $partTypeNameID = $_POST['partTypeNameID'];
                $partTypeName = $_POST['partTypeName'];
                $this->updatePartTypeName($partTypeNameID, $partTypeName);
            }

    
            // Check if the "show part types" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showPartTypes') {
                $partTypes = $this->parttype_model->getPartTypes();
                $this->showPartTypes($partTypes);
            }
    
            // Check if the "show add part type form" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showAddPartTypeForm') {
                $this->showAddPartTypeForm();
            }
    
            // Check if the "show edit part type form" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showUpdatePartTypeForm') {
                $partTypeID = $_GET['partTypeID'];
                $this->showUpdatePartTypeForm($partTypeID);
            }
        }

        public function addPartType($partTypeName) {
            // Perform validation if needed
            $result = $this->parttype_model->insertPartType($partTypeName);

            if ($result) {
                $_SESSION['success_message'] = "Part type added successfully!";
            } else {
                $_SESSION['error_message'] = "Error adding part type.";
            }
                // Redirect back to the index page
                header("Location: ?action=showPartTypes");
                exit();
        }

        public function showPartTypes() {
            $partTypes = $this->parttype_model->getPartTypes();
            // Include the view file to display part types
            include 'views/parttype_show.php';
        }


        public function showAddPartTypeForm() {
            // Include the view file to display the add part type form
            include 'views/parttype_add_form.php';
        }


//////
        public function showUpdatePartTypeForm($partTypeNameID) {
        // Retrieve the part type details from the model
        $partType = $this->parttype_model->getPartTypeNameById($partTypeNameID);

        // Display the edit form
        include 'views/parttype_update_form.php';
        }

        public function updatePartTypeName($partTypeNameID, $partTypeName) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelUpdate'])) {
                header("Location: ?action=showPartTypes");
                exit();
            }

            $result = $this->parttype_model->updatePartTypeName($partTypeNameID, $partTypeName);

            if ($result) {
            $_SESSION['success_message'] = "Part type updated successfully!";
            } else {
            $_SESSION['error_message'] = "Error updating part type.";
            }

            // Redirect back to the index page
            header("Location: index.php?action=showPartTypes");
            exit();
        }
        


















                
        //         // Check if the "update brand" action is requested
        //         if (isset($_GET['action']) && $_GET['action'] === 'updateBrand') {
        //             $brandID = $_GET['brandID'];
        //             $brandName = $_POST['brandName'];
        //             $this->updateBrand($brandID, $brandName);
        //         }
        //     }
    
        //     // Check if the "add brand" action is requested
        //     if (isset($_GET['action']) && $_GET['action'] === 'showAddBrandForm') {
        //         include 'views/brands_add_form.php';
        //     }
    
        //     if (isset($_GET['action']) && $_GET['action'] === 'showUpdateBrandForm') {
        //         $brandID = $_GET['brandID'];
        //         $this->showUpdateBrandForm($brandID);
        //     }
        // }
    
    
        
    
    
    
        // public function addBrand($brandName) {
    
        //     $result = $this->brand_model->insertBrand($brandName);
    
        //     if ($result) {
        //         $_SESSION['success_message'] = "Brand added successfully!";
        //     } else {
        //         $_SESSION['error_message'] = "Error adding brand.";
        //     }
    
        //     // Redirect back to the index page
        //     header("Location: index.php");
        //     exit();
        // }
    
        // public function showBrands() {
        //     $brands = $this->brand_model->getBrands();
        //     include 'views/brands_show.php'; // Include the file to display brands
        // }
    
        // public function showUpdateBrandForm($brandID) {
        //     $brand = $this->brand_model->getBrandByID($brandID);
        //     include 'views/brands_update_form.php';
        // }
    
        // public function updateBrand($brandID, $brandName) {
        //     // Check if the "Cancel" button was clicked
        //     if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelUpdate'])) {
        //         header("Location: index.php");
        //         exit();
        //     }
    
        //     $result = $this->brand_model->updateBrand($brandID, $brandName);
    
        //     if ($result) {
        //         $_SESSION['success_message'] = "Brand updated successfully!";
        //     } else {
        //         $_SESSION['error_message'] = "Error updating brand.";
        //     }
    
        //     // Redirect back to the index page
        //     header("Location: index.php");
        //     exit();
        // }
    
        }
    
























?>