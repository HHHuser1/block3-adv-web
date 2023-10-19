<?PHP
// function isPalindrome($sentence) {
//     // Clean the input sentence
//     $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $sentence));

//     // Initialize loop pointers
//     $start = 0;
//     $end = strlen($cleaned) - 1;

//     while ($start < $end) {
//         // Check if characters at $start and $end are not the same
//         if ($cleaned[$start] !== $cleaned[$end]) {
//             return false; // It's not a palindrome
//         }

//         // Move pointers
//         $start++;
//         $end--;
//     }

//     return true; // It's a palindrome
// }


// function isPalindrome($sentence) {
//     $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $sentence));
//     $length = strlen($cleaned);

//     for ($i = 0; $i < $length / 2; $i++) {
//         $startChar = $cleaned[$i];
//         $endChar = $cleaned[$length - 1 - $i];

//         switch (true) {
//             case ($startChar !== $endChar):
//                 return false;
//             default:
//                 continue;
//         }
//     }

//     return true;
// }

// function isPalindrome($sentence) {
//     $cleaned = preg_replace('/[^a-zA-Z0-9]/', '', $sentence); // Keep both uppercase and lowercase letters
//     $cleaned = strtolower($cleaned); // Convert to lowercase for comparison

//     $length = strlen($cleaned);

//     for ($i = 0; $i < $length / 2; $i++) {
//         if ($cleaned[$i] !== $cleaned[$length - 1 - $i]) {
//             return false;
//         }
//     }

//     return true;
// }





$phraseToTest = "ad  a.......";

// have 2 variables to keep track of phrase forwards and backwards
$forwards = "";
$backwards = "";


// populate my 2 variables - use a loop
// chaeck for spaces
// ignore or skip those spaces
for($i = 0 ; $i < strlen($phraseToTest); $i++) {
    if ($phraseToTest[$i] == " " || $phraseToTest[$i] == ".") {
        // echo "skip";
} else { 
    $forwards .= $phraseToTest[$i];

}



    // if ($phraseToTest[$i] !== " " && $phraseToTest[$i] !== ".") {
    //     $forwards .= $phraseToTest[$i];
        
    // }
}
// echo $forwards;


for($i = strlen($phraseToTest) - 1; $i >= 0; $i--) {
    if(!($phraseToTest[$i] == " "|| $phraseToTest [$i] == ".")) {
        $backwards .= $phraseToTest[$i];
    }
}
// echo $backwards;

if($forwards === $backwards) {
    echo $phraseToTest . " (is a palindrome)";
} else {
    echo $phraseToTest . " (is NOT a palindrome)";
}



// compare from the front and the back simultaneously 










// // Test the function
// $sentence = "A man, a plan, a canal, Panamas!!!";
// if (isPalindrome($sentence)) {
//     echo "$sentence (is a palindrome)";

// } else {
//     echo "$sentence  (is NOT a palindrome)";
// }


// echo '<br>'.'<br>';

// // Test the function
// $sentence = "Cigar? Toss it in a can. It is so tragic...";

// if (isPalindrome($sentence)) {
//     echo "$sentence  (is a palindrome)";
// } else {
//     echo "$sentence  (is NOT a palindrome)";
// }

// echo '<br>'.'<br>';

// $sentence = "Was it Eliot's toilet I saw?";

// if (isPalindrome($sentence)) {
//     echo "$sentence  (is a palindrome)";
// } else {
//     echo "$sentence  (is NOT a palindrome)";
// }

// echo '<br>'.'<br>';

// $sentence = "LOL...Yo! Banana boy. LOL";

// if (isPalindrome($sentence)) {
//     echo "$sentence  (is a palindrome)";
// } else {
//     echo "$sentence  (is NOT a palindrome)";
// }

// echo '<br>'.'<br>';

// $sentence = "Never odd or even.____----____----}{}{}%^&$%#^%^*$%^&^@$%#&^%";

// if (isPalindrome($sentence)) {
//     echo "$sentence  (is a palindrome)";
// } else {
//     echo "$sentence  (is NOT a palindrome)";
// }


?>