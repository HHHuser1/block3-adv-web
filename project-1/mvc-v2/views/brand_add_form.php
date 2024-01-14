<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/brand_add_form.php -->
<h2>Add Brand</h2>
<form method="post" action="?action=addBrand">
    <label for="brandName">Brand Name:</label>
    <input type="text" name="brandName" required>
    <button type="submit">Add Brand</button>
</form>