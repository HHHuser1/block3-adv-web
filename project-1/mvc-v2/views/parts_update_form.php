<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Assuming $partDetails is an array with part details
    $partName = isset($partDetails['partName']) ? $partDetails['partName'] : '';
    $partTypeNameID = isset($partDetails['partTypeNameID']) ? $partDetails['partTypeNameID'] : '';
    $brandID = isset($partDetails['brandID']) ? $partDetails['brandID'] : '';
    $price = isset($partDetails['price']) ? $partDetails['price'] : '';
    $compatibilityID = isset($partDetails['compatibilityID']) ? $partDetails['compatibilityID'] : '';

    // Assuming $partTypeNames, $brands, and $compatibleWith are arrays with data for dropdowns
?>

<!-- views/parts_update_form.php -->
<h2>Edit Part</h2>

<form method="post" action="?action=updatePart">
    <input type="hidden" name="action" value="updatePart">
    <input type="hidden" name="partID" value="<?= $partID ?>">
    
    <label for="partName">Part Name:</label>
    <input type="text" name="partName" value="<?= $partName ?>" required><br>

    <label for="partTypeNameID">Part Type:</label>
    <select name="partTypeNameID" required>
        <option value="" disabled selected>-- Select Part Type --</option>
        <?php foreach ($partTypeNames as $partTypeName): ?>
            <option value="<?= $partTypeName['partTypeNameID'] ?>" <?= ($partTypeNameID == $partTypeName['partTypeNameID']) ? 'selected' : '' ?>>
                <?= $partTypeName['partTypeName'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <label for="brandID">Brand:</label>
    <select name="brandID" required>
        <option value="" disabled selected>-- Select Brand --</option>
        <?php foreach ($brands as $brand): ?>
            <option value="<?= $brand['brandID'] ?>" <?= ($brandID == $brand['brandID']) ? 'selected' : '' ?>>
                <?= $brand['brandName'] ?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <label for="price">Price:</label>
    <input type="number" name="price" value="<?= $price ?>" required><br>

    <label for="compatibilityID">Compatibility:</label>
    <select name="compatibilityID" required>
    <option value="" disabled selected>-- Compatible With --</option>
    <?php foreach ($compatibility as $compatible): ?>
        <option value="<?= $compatible['compatibilityID'] ?>" <?= ($compatibilityID == $compatible['compatibilityID']) ? 'selected' : '' ?>>
            <?= $compatible['compatibleWith'] ?>
        </option>
    <?php endforeach; ?>
    </select><br>

    <button type="submit">Update Part</button>
    <input type="submit" name="cancelUpdate" value="Cancel">
</form>
