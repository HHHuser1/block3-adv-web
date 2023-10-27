<?php 

ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class officeChair{
    private $color;
    // public $backTilt;
    // public $wheels;
    // public $armRest;

    public function __construct() {
        $this->color= "red";
    }

    private function getColor() {
        return $this->color;
    }

    private function setColor($newColor) {
        $this->color = $newColor;
    }

    public function ask() {
        return "color is: " . $this->getColor();
    }

    public function action($data) {
        $this->setColor($data);
    }
}



$samChair = new OfficeChair();

$samChair->action("green");

echo $samChair->ask();
echo '<br>';




// $samChair->color = "red";
// $samChair->backTilt = "yes";
// $samChair->wheels = "yes";
// $samChair->armRest = "no";



// echo "color is: " ,$samChair->color;
// echo '<br>';
// echo "has back tilt: " ,$samChair->backTilt;
// echo '<br>';
// echo "has wheels: " ,$samChair->wheels;
// echo '<br>';
// echo "has arm rest: " ,$samChair->armRest;
// echo '<br>';







?>