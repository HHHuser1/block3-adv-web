
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
    <button type="submit" name="cancelUpdate">Cancel</button>
</form>
