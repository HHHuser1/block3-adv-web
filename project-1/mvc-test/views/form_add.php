<!-- <form method="post" action="">
    <label for="brand">Brand Name</label>
    <input type="text" name="brand" >
    <input type="submit" name="submit" value="Add Brand">
</form> -->


<!-- views/form_add.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand</title>
</head>
<body>
    <h2>Add Brand</h2>
<!-- views/form_add.php -->

<form method="post" action="">
    <label for="brandName">Brand Name:</label>
    <input type="text" name="brandName"  required>

    <label for="countryOfOrigin">Country of Origin:</label>
    <input type="text" name="countryOfOrigin" required>

    <input type="submit" name="submit" value="Add Brand">
    <input type="reset" value="Reset" />
</form>

</body>
</html>

