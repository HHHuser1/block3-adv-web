<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>

<!-- views/brands_update_form.php -->
<h2>Edit Brand </h2>
<form method="post" action="?action=updateBrand&brandID=<?= $brand['brandID'] ?>">
    <input type="hidden" name="brandID" value="<?= $brand['brandID'] ?>"  >
    <input type="hidden" name="action" value="updateBrand">
    <label for="brandName">Brand Name:</label>
    <input type="text" name="brandName" value="<?= $brand['brandName'] ?>" required>
    <button type="submit" name="update" >Update Brand</button>
    <button type="submit" name="cancelUpdate" >Cancel</button>
</form>
