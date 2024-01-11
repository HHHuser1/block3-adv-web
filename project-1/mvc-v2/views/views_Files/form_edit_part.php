<!-- form_edit_part.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Part</title>
</head>
<body>
    <h2>Edit Part</h2>

    <?php
    if (isset($partDetails)) {
        ?>
        <form method="post" action="?=submitEditPart&partID=<?php echo $partDetails['partID']; ?>">
            <input type="hidden" name="partID" value="<?php echo $partDetails['partID']; ?>">
            
            <label for="partName">Part Name:</label>
            <input type="text" name="partName" value="<?php echo $partDetails['partName']; ?>"  placeholder="Enter part name">
            
            <label for="brandID">Brand Name:</label>
            <!-- Dropdown for Brand Name -->
            <select name="brandID" required>
            <option value="" disabled  >-- Select Brand --</option>
                <?php
                foreach ($users as $user) {
                    $selected = ($user['brandID'] == $partDetails['brandID']) ? 'selected' : '';
                    echo "<option value='{$user['brandID']}' $selected>{$user['brandName']}</option>";
                }
                ?>
            </select>

            <label for="partTypeNameID">Part Type:</label>
            <!-- Dropdown for Part Type -->
            <select name="partTypeNameID" required>
            <option value="" disabled >-- Select Part Type --</option>
                <?php
                foreach ($partTypeNames as $partTypeName) {
                    $selected = ($partTypeName['partTypeNameID'] == $partDetails['partTypeNameID']) ? 'selected' : '';
                    echo "<option value='{$partTypeName['partTypeNameID']}' $selected>{$partTypeName['partTypeName']}</option>";
                }
                ?>
            </select>

            <label for="price">Price:</label>
            <input type="number" name="price" value="<?php echo $partDetails['price']; ?>" required>
            
            <label for="compatibilityID">Compatibility:</label>
            <!-- Dropdown for Compatibility -->
            <select name="compatibilityID" required>
            <option value="" disabled >--Compatible With --</option>
                <?php
                foreach ($compatibleWith as $compatibility) {
                    $selected = ($compatibility['compatibilityID'] == $partDetails['compatibilityID']) ? 'selected' : '';
                    echo "<option value='{$compatibility['compatibilityID']}' $selected>{$compatibility['compatibleWith']}</option>";
                }
                ?>
            </select>
            <p>
                <input type="submit" name="submitEditPart" value="Save Changes">
                <input type="submit" name="cancelEditPart" value="Cancel">
            </p>
        </form>
        <?php
    } else {
        echo 'Part details not available';
    }
    ?>
</body>
</html>
