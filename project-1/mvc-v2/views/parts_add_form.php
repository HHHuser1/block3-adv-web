<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/parttypes_add_form.php -->
<h2>Add Part</h2>

<!-- <form method="post" action="?action=addPart">
        <label for="partName">Part Name:</label>
        <input type="text" name="partName" required><br>

        <label for="partTypeNameID">Part Type:</label>
        <select name="partTypeNameID" required>
        <option value="" disabled selected>-- Select Part Type --</option>
            <?php foreach ($partTypeNames as $partTypeName): ?>
                <option value="<?= $partTypeName['partTypeNameID'] ?>"><?= $partTypeName['partTypeName'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="brandID">Brand:</label>
        <select name="brandID" required>
        <option value="" disabled selected >-- Select Brand --</option>
            <?php foreach ($users as $user): ?>
                <option value="<?= $user['brandID'] ?>"><?= $user['brandName'] ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="price">Price:</label>
        <input type="number" name="price"  required><br>

        <label for="compatibilityID">Compatibility:</label>
        <select name="compatibilityID" required>
        <option value="" disabled selected >-- Compatible With --</option>
            <?php foreach ($compatibleWith as $compatibleWith): ?>
                <option value="<?= $compatibleWith['compatibilityID'] ?>"><?= $compatibleWith['compatibleWith'] ?></option>
            <?php endforeach; ?>
        </select><br>

        
        <p>
            <input type="submit" name="submitPart" value="Add Part">
            <input type="reset" value="Reset" />
        </p>
        
    </form> -->


<!-- views/parts_add_form.php -->
<form method="post" action="?action=addPart">
    <label for="partName">Part Name:</label>
    <input type="text" name="partName" required><br>

    <label for="partTypeNameID">Part Type:</label>
    <select name="partTypeNameID" required>
        <option value="" disabled selected>-- Select Part Type --</option>
        <?php foreach ($partTypeNames as $partTypeName): ?>
            <option value="<?= $partTypeName['partTypeNameID'] ?>"><?= $partTypeName['partTypeName'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="brandID">Brand:</label>
    <select name="brandID" required>
        <option value="" disabled selected>-- Select Brand --</option>
        <?php foreach ($brands as $brand): ?>
            <option value="<?= $brand['brandID'] ?>"><?= $brand['brandName'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="price">Price:</label>
    <input type="number" name="price" required><br>

    <label for="compatibilityID">Compatibility:</label>
    <select name="compatibilityID" required>
        <option value="" disabled selected>-- Compatible With --</option>
        <?php foreach ($compatibility as $compatible): ?>
            <option value="<?= $compatible['compatibilityID'] ?>"><?= $compatible['compatibleWith'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <p>
        <input type="hidden" name="action" value="addPart">

        <button type="submit" name="addPart" value="Add Part">Add Part</button>
        <button type="reset" value="Reset" />Reset</button>
    </p>
</form>
