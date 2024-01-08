
<h2>....PART TYPES....</h2>

<?php
if ($partTypeNames) {
    foreach ($partTypeNames as $partTypeName) {
        echo $partTypeName['partTypeNameID'] . ' ' . $partTypeName['partTypeName'] . '<br>';
    }
} else {
    echo "<p>No part type found</p>";
}
    echo "<p><a href='./index.php'>Home</a></p>";
?>
