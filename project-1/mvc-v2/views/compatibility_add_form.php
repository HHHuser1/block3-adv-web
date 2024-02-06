<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>

<!-- views/compatibility_add_form.php -->
<h2>Add Compatibility</h2>
<form method="post" action="?action=addCompatibility">
    <label for="compatibleWith">Compatible With:</label>
    <input type="text" name="compatibleWith" required>
    <input type="hidden" name="action" value="addCompatibility">
    <button type="submit">Add Compatibility</button>
</form>

