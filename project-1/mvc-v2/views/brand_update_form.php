<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>

<!-- views/brands_update_form.php -->
<form method="post" action="?action=updateBrand&brandID=<?= $brand['brandID'] ?>">
    <input type="hidden" name="brandID" value="<?= $brand['brandID'] ?>"  >
    <input type="hidden" name="action" value="updateBrand">
    <label for="brandName">Brand Name:</label>
    <input type="text" name="brandName" value="<?= $brand['brandName'] ?>" required>
    <input type="submit" name="update" value="Update Brand"></input>
    <input type="submit" name="cancelUpdate" value="Cancel"></input>
</form>
