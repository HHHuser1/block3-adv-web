<!-- 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Part</title>
</head>
<body>
    <h2>Add New Part</h2>

    <form method="post" action="">
        <label for="partName">Part Name:</label>
        <input type="text" name="partName" required><br>

        <label for="partTypeNameID">Part Type:</label>
    <select name="partTypeNameID" required>
        <?php foreach ($partTypeNames as $partTypeName): ?>
            <option value="<?= $partTypeName['partTypeNameID'] ?>"><?= $partTypeName['partTypeName'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="brandID">Brand:</label>
    <select name="brandID" required>
        <?php foreach ($users as $user): ?>
            <option value="<?= $user['brandID'] ?>"><?= $user['brandName'] ?></option>
        <?php endforeach; ?>
    </select><br>

    <label for="compatibilityID">Compatibility:</label>
    <select name="compatibilityID" required>
        <?php foreach ($compatibilities as $compatibility): ?>
            <option value="<?= $compatibility['compatibilityID'] ?>"><?= $compatibility['compatibleWith'] ?></option>
        <?php endforeach; ?>
    </select><br>

        <input type="submit" name="submitPart" value="Add Part">
    </form>

    <p><a href="../index.php">Home</a></p>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Part</title>
</head>
<body>
    <h2>Add Part</h2>
    <form method="post" action="">
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
        
    </form>
    
    <p><a href="./index.php">Home</a></p>

</body>
</html>
