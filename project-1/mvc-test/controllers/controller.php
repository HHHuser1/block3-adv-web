<?php
    include_once 'models/model.php';
   
    class Controller {
        private $model;
        public function __construct($connection) {
            $this->model = new userModel($connection);
        }
        public function showUsers() {
            $users = $this->model->selectUsers();
            include 'views/home.php';
        }
        public function showForm() {
            include 'views/form.php';
        }
        public function add() {
            $brand = $_POST['brand'];
            if(!$brand) {
                echo "<p>Missing information</p>";
                $this->showForm();
                return;
            } else if($this->model->insertUser($brand)) {
                echo "<p>Added user: $brand</p>";
                echo "<p><a href='./index.php'>Home</a></p>";
            } else {
                echo "<p>Could not add user</p>";
            }
            // $this->showUsers();
        }
    }

    include_once 'controllers/connection.php';
    $connection2 = new connectionObject($host, $username, $password, $database);
    $controller = new Controller($connection2);

    // $controller->showUsers();
    // $controller->showForm();
    // $controller->add();
    // if page gets information, add it
    // otherwise show form
    // if(isset($_POST['submit'])) {
    //     $controller->add();
    // } else {
    //     $controller->showForm();
    // }

?>
