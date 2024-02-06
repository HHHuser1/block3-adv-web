<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/parttypes_add_form.php -->
<h2>Add Part Type</h2>

<form method="post" action="?action=addPartType">
    <label for="partTypeName">Part Type Name:</label>
    <input type="text" name="partTypeName" required>
    <button type="submit" name="action" value="addPartType">Add Part Type</button>
</form>
