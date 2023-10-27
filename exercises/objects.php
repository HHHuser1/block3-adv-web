<?php 

ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class officeChair{
    private $color;
    private $hasBackTilt;
    // public $backTilt;
    // public $wheels;
    // public $armRest;

    public function __construct() {
        $this->color= "red";
        $this->hasBackTilt = "yes";
    }

    private function getColor() {
        return $this->color;
    }

    private function getBackTilt() {
        return $this->hasBackTilt;
    }

    private function setColor($newColor) {
        $this->color = $newColor;
    }

    private function setBackTilt($newhasBackTilt) {
        $this->hasBackTilt = $newhasBackTilt;
    }

    public function ask() {
        return "color is: " . $this->getColor() .
         " has back tilt: " . $this->getBackTilt();
    }

    public function action($data, $data2) {
        $this->setColor($data);
        $this->setBackTilt($data2);
    }
}



$samChair = new OfficeChair();

$samChair->action("green", "no");


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