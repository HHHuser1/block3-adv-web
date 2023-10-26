<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class officeChair

{
    public $color;
    public $backTilt;
    public $wheels;
    public $armRest;
}

$samChair = new OfficeChair();

$samChair->color = "red";
$samChair->backTilt = "yes";
$samChair->wheels = "yes";
$samChair->armRest = "no";

// $johnChair = new OfficeChair();

// $johnChair->color = "blue";
// $johnChair->backTilt = "yes";
// $johnChair->wheels = "no";
// $johnChair->armRest = "no";

echo "color is: " ,$samChair->color;
echo '<br>';
echo "has back tilt: " ,$samChair->backTilt;
echo '<br>';
echo "has wheels: " ,$samChair->wheels;
echo '<br>';
echo "has arm rest: " ,$samChair->armRest;
echo '<br>';
// echo '<br>';
// echo "color is: " ,$johnChair->color;
// echo '<br>';
// echo "has back tilt: " ,$johnChair->backTilt;
// echo '<br>';
// echo "has wheels: " ,$johnChair->wheels;
// echo '<br>';
// echo "has arm rest: " ,$johnChair->armRest;
// echo '<br>';






?>