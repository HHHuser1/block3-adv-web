<!-- compatibleWith -->

<h2>....Compatibility....</h2>

<?php
if ($compatibleWith) {
    foreach ($compatibleWith as $compatibleWith) {
        echo $compatibleWith['compatibilityID'] . ' ' . $compatibleWith['compatibleWith'] . '<br>';
    }
} else {
    echo "<p>No compatibility found</p>";
}
    echo "<p><a href='./index.php'>Home</a></p>";
?>
