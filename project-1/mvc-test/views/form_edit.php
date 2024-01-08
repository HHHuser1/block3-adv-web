<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Brand</title>
</head>
<body>
    <h2>Edit Brand</h2>
<!-- views/form_edit.php -->

<form method="post" action="?action=update">
    <input type="hidden" name="brandID" value="<?php echo $brandDetails['brandID']; ?>">
    
    <label for="brandName">Brand Name</label>
    <input type="text" name="brandName" value="<?php echo $brandDetails['brandName']; ?>">
    
    <label for="countryOfOrigin">Country of Origin</label>
    <input type="text" name="countryOfOrigin" value="<?php echo $brandDetails['countryOfOrigin']; ?>">
    
    <input type="submit" name="update" value="Update Brand">
    <input type="submit" name="cancelEdit" value="Cancel">
</form>

</body>
</html>
