<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/parttypes_edit_form.php -->
<h2>Edit Part Type</h2>

<form method="post" action="?action=updatePartType">
    <input type="hidden" name="action" value="updatePartType">
    <input type="hidden" name="partTypeNameID" value="<?= $partType['partTypeNameID'] ?>">
    <label for="partTypeName">Part Type Name:</label>
    <input type="text" name="partTypeName" value="<?= $partType['partTypeName'] ?>" required>
    <button type="submit">Update Part Type</button>
    <button type="submit" name="cancelUpdate">Cancel</button>
</form>

