<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/parttypes_edit_form.php -->
<!-- <h2>Edit Part Type</h2>

<form method="post" action="?action=updatePartType">
    <input type="hidden" name="action" value="updatePartType">
    <input type="hidden" name="partTypeNameID" value="<?= $partType['partTypeNameID'] ?>">
    <label for="partTypeName">Part Type Name:</label>
    <input type="text" name="partTypeName" value="<?= $partType['partTypeName'] ?>" required>
    <button type="submit">Update Part Type</button>
    <input type="submit" name="cancelUpdate" value="Cancel"></input>
</form> -->

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!-- views/compatibility_update_form.php -->
<h2>Edit Compatibility</h2>

<form method="post" action="?action=updateCompatibility">
    <input type="hidden" name="action" value="updateCompatibility">
    <input type="hidden" name="compatibilityID" value="<?= $compatibility['compatibilityID'] ?>">
    <label for="compatibleWith">Compatible With:</label>
    <input type="text" name="compatibleWith" value="<?= $compatibility['compatibleWith'] ?>" required>
    <button type="submit">Update Compatibility</button>
    <input type="submit" name="cancelUpdate" value="Cancel">
</form>
