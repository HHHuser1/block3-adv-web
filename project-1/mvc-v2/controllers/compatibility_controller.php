<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


// compatibility_controller.php
include_once 'models/compatibility_model.php';

class CompatibilityController {
    private $compatibility_Model;

    public function __construct($connection) {
        $this->compatibility_Model = new CompatibilityModel($connection);
    }

    public function handleRequest() {
        // Check if the "add compatibility" action is requested
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'addCompatibility') {
            $compatibleWith = $_POST['compatibleWith'];
            $this->addCompatibility($compatibleWith);
        }

        // Check if the "update compatibility" action is requested
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'updateCompatibility') {
            $compatibilityID = $_POST['compatibilityID'];
            $compatibleWith = $_POST['compatibleWith'];
            $this->updateCompatibility($compatibilityID, $compatibleWith);
        }

        // Check if the "show compatibility" action is requested
        if (isset($_GET['action']) && $_GET['action'] === 'showCompatibility') {
            $compatibility = $this->compatibility_Model->getCompatibility();
            $this->showCompatibility($compatibility);
        }

        // Check if the "show add compatibility form" action is requested
        if (isset($_GET['action']) && $_GET['action'] === 'showAddCompatibilityForm') {
            $this->showAddCompatibilityForm();
        }

        // Check if the "show edit compatibility form" action is requested
        if (isset($_GET['action']) && $_GET['action'] === 'showUpdateCompatibilityForm') {
            $compatibilityID = $_GET['compatibilityID'];
            $this->showUpdateCompatibilityForm($compatibilityID);
        }
    }

    public function showCompatibility() {
        $compatibility = $this->compatibility_Model->getCompatibility();
        include 'views/compatibility_show.php';
    }

    public function showAddCompatibilityForm() {
        include 'views/compatibility_add_form.php';
    }

    public function showUpdateCompatibilityForm($compatibilityID) {
        // Retrieve compatibility details from the model
        $compatibility = $this->compatibility_Model->getCompatibilityById($compatibilityID);

        include 'views/compatibility_update_form.php';
    }

    public function addCompatibility($compatibleWith) {
        $result = $this->compatibility_Model->insertCompatibility($compatibleWith);

        if ($result) {
            $_SESSION['success_message'] = "Compatibility added successfully!";
        } else {
            $_SESSION['error_message'] = "Error adding compatibility.";
        }

        header("Location: index.php?action=showCompatibility");
        exit();
    }

    public function updateCompatibility($compatibilityID, $compatibleWith) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cancelUpdate'])) {
            header("Location: ?action=showCompatibility");
            exit();
        }

        $result = $this->compatibility_Model->updateCompatibility($compatibilityID, $compatibleWith);

        if ($result) {
            $_SESSION['success_message'] = "Compatibility updated successfully!";
        } else {
            $_SESSION['error_message'] = "Error updating compatibility.";
        }

        header("Location: index.php?action=showCompatibility");
        exit();
    }
}






















?>