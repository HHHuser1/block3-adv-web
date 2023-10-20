<?php

    // echo "demo"."delta";

    $phaseToTest = "seataco...cata. . . . . . . ...es";

    // have 2 variables to keep track of phase forwards and backwards
    $forwards = "";
    $backwards = "";

    // populate my 2 variables - use a loop
    // check for spaces
    // ignore or skip
    for($i = 0; $i < strlen($phaseToTest); $i++) {
        // echo $phaseToTest[$i];
        // if($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
        //     // echo "skip";
        // } else {
        //     $forwards .= $phaseToTest[$i];
        //     // $forwards = $forwards . $phaseToTest[$i];
        //     // $x = $x + 2;
        //     // $x += 2;
        // }
        // if($phaseToTest[$i] != " " && $phaseToTest[$i] != ".") {
        //     $forwards .= $phaseToTest[$i];
        // }
        if(!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
            $forwards .= $phaseToTest[$i];
        }
    }
    // echo $forwards;

    for($i = strlen($phaseToTest)-1; $i >= 0; $i--) {
        if(!($phaseToTest[$i] == " " || $phaseToTest[$i] == ".")) {
            $backwards .= $phaseToTest[$i];
        }
    }
    // echo $backwards;

    // compare the two new variables
    if($forwards == $backwards) {
        echo $phaseToTest . " (is a palindrome)";
    } else {
        echo $phaseToTest . " (is not a palindrome)";
    }

echo "<br>";
    // // compare from the front AND from the back simultaneously
    // // keep track of my front index
    // // keep track of my back index SEPARATELY
    // // $iFront = 0;
    // $backIndex = strlen($phaseToTest)-1;

    // for($i = 0; $i < strlen($phaseToTest); $i++) {
    //     if ($phaseToTest[$backIndex] < $phaseToTest[$i]) {
    //         echo $phaseToTest . " (is a palindrome)";
    //         break;
    //     }
    //     // while I have a space or a period, skip to the next index
    //     while($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
    //         // echo " skip ";
    //         $i++;
    //     }

    //     for($backIndex = strlen($phaseToTest)-1; $backIndex >= 0; $backIndex--) {   
    //     while($phaseToTest[$backIndex] == " " || $phaseToTest[$backIndex] == ".") {
    //     // echo $phaseToTest[$backIndex];
    //     // echo " skipback ";
    //     $backIndex--;
    //     }
    // }
    //     if($phaseToTest[$i] === $phaseToTest[$backIndex]) {
    //         echo $phaseToTest . " (is NOT a palindrome)";
    //         break;
    //     }

    // }


    // compare from the front AND from the back simultaneously
    // keep track of my front index
    // keep track of my back index SEPARATELY
    // $iFront = 0;
    $backIndex = strlen($phaseToTest)-1;

    for($i = 0; $i < strlen($phaseToTest); $i++) {
        // while I have a space or a period, skip to the next index
        while($phaseToTest[$i] == " " || $phaseToTest[$i] == ".") {
            $i++;
        }
        // echo $backIndex;
        $backIndex--;

    }


    




?>