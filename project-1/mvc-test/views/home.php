<?php
echo '<br>';
if($users) {
    foreach($users as $user) {
        echo $user['brandID'] . ' ' . $user['brandName'] . '<br>';
    }
} else {
    echo 'No brands found';
}
?>


