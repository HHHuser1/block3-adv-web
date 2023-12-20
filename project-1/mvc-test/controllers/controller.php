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

    $connection2 = new connectionObject("localhost", "...", "...", "adv_web_demo");
    $controller = new Controller($connection2);
?>
