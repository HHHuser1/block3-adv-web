<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .odd{
            background: #eee;
        }
    </style>
</head>
<body>
    <h1>hello</h1>
</body>
</html>

<?php
$sampleArray = array(1,2,3, "red", "blue", "green");

for($i = 0 ; $i < count($sampleArray) ; $i++) {
    $class = ($i+1) % 2 ? "odd" : "even";
    // echo $class
    echo "<p class='$class'>index $i contains: $sampleArray[$i]</p>";    
}

?>

<?php


?>

