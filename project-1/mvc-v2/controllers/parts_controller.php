<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);




            

    include_once 'models/parts_model.php';

    class PartsController {
        private $parts_model;
    
        public function __construct($connection) {
            $this->parts_model = new partsModel($connection);
        }
    

        public function handleRequest() {
            // Check if the "add part" action is requested
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'addPart') {
                $this->addPart($_POST);
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'updatePart') {
                $partID = $_POST['partID'];
                $partName = $_POST['partName'];
                $this->updatePart($partID, $partName);
            }
    
            // Check if the "show parts" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showParts') {
                $this->showParts();
            }
    
            // Check if the "show add part form" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showAddPartsForm') {
                $this->showAddPartsForm();
            }
    
            // Check if the "show edit part form" action is requested
            if (isset($_GET['action']) && $_GET['action'] === 'showUpdatePartForm') {
                $partID = $_GET['partID'];
                $this->showUpdatePartForm($partID);
            }
        }

        public function showUpdatePartForm($partID) {
            $partDetails = $this->parts_model->getPartByID($partID);
            $part = $this->parts_model->getParts($partID);
            $partTypeNames = $this->parts_model->getPartTypeNames();
            $brands = $this->parts_model->getBrands();
            $compatibility = $this->parts_model->getCompatibility();

            include 'views/parts_update_form.php';
        }
    
        public function showAddPartsForm() {
            $partTypeNames = $this->parts_model->getPartTypeNames();
            $brands = $this->parts_model->getBrands();
            $compatibility = $this->parts_model->getCompatibility();
        
            include 'views/parts_add_form.php';
        }
    
        public function showParts() {
            $parts = $this->parts_model->getParts();
            include 'views/parts_show.php';
        }
    
        public function addPart($postData) {
            $partName = $postData['partName'];
            $partTypeNameID = $postData['partTypeNameID'];
            $brandID = $postData['brandID'];
            $price = $postData['price'];
            $compatibilityID = $postData['compatibilityID'];
    
            if ($this->parts_model->insertPart($partName, $partTypeNameID, $brandID, $price, $compatibilityID)) {
                // Success message or redirect to showParts
                $_SESSION['success_message'] = 'Part added successfully';
                header('Location: ?action=showParts');
            } else {
                // Error handling
                echo 'Error adding part.';
            }
        }



        // public function updatePart($partID, $partName) {
        //     if ($this->parts_model->updatePartName($partID, $partName)) {
        //         // Success message or redirect to showParts
        //         $_SESSION['success_message'] = 'Part name updated successfully';
        //         header('Location: ?action=showParts');
        //     } else {
        //         // Error handling
        //         echo 'Error updating part name.';
        //     }
        // }
    
        public function updatePart() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelUpdate'])) {
                header("Location: ?action=showParts");
                exit();
            }
            // Assuming you have a method in parts_model to fetch part details by ID
            $partID = $_POST['partID'];
            $partDetails = $this->parts_model->getPartByID($partID);
        
            if (!$partDetails) {
                // Handle the case when part details are not found
                echo 'Part details not found.';
                return;
            }
        
            // Now you can use $partDetails to set default values
            $partName = $partDetails['partName'];
            $partTypeNameID = $partDetails['partTypeNameID'];
            $brandID = $partDetails['brandID'];
            $price = $partDetails['price'];
            $compatibilityID = $partDetails['compatibilityID'];
        
            // Update values if provided in $_POST
            if (isset($_POST['partName'])) {
                $partName = $_POST['partName'];
            }
        
            if (isset($_POST['partTypeNameID'])) {
                $partTypeNameID = $_POST['partTypeNameID'];
            }
        
            if (isset($_POST['brandID'])) {
                $brandID = $_POST['brandID'];
            }
        
            if (isset($_POST['price'])) {
                $price = $_POST['price'];
            }
        
            if (isset($_POST['compatibilityID'])) {
                $compatibilityID = $_POST['compatibilityID'];
            }
        
            // Call the updatePart method in parts_model
            if ($this->parts_model->updatePart($partID, $partName, $partTypeNameID, $brandID, $price, $compatibilityID)) {
                // Success message or redirect to showParts
                $_SESSION['success_message'] = 'Part updated successfully';
                header('Location: ?action=showParts');
            } else {
                // Error handling
                echo 'Error updating part.';
            }




        }
}




    ?>