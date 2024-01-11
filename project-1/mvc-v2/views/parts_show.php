


<?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>
<h2>.... PARTS ....</h2>
<!-- <?php if ($parts): ?>
    <table border="3">
        <thead>
            <tr>
                <th>Part ID</th>
                <th>Part Name</th>
                <th>Part Type</th>
                <th>Brand Name</th>
                <th>Brand Country of Origin</th>
                <th>Price ($)</th>
                <th>Compatibility</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($parts as $part): ?>
                <tr>
                    <td><?php echo $part['partID']; ?></td>
                    <td><?php echo $part['partName']; ?></td>
                    <td><?php echo $part['partTypeName']; ?></td>
                    <td><?php echo $part['brandName']; ?></td>
                    <td><?php echo $part['countryOfOrigin']; ?></td>
                    <td><?php echo $part['price']; ?></td>
                    <td><?php echo $part['compatibleWith']; ?></td>
                    <td>
                        <form method='post'  action='?action=showEditPartForm&partID=<?php echo $part['partID']; ?>'>
                            
                            <input type='hidden' name='partID' value='<?php echo $part['partID']; ?>'>
                            <input type='submit' name='editPart' value='Edit'>
                        </form>
                        <form method='post' action='?action=confirmDeletePart&partID='<?php echo $part['partID']; ?>'>
                            <input type='hidden' name='partID' value='<?php echo $part['partID']; ?>'>
                            <input type='submit' name='confirmDeletePart' value='Delete' id="delete_button">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No parts found</p>
<?php endif; ?> -->


<!-- views/parts_show.php -->
<h2>Parts</h2>

<table border="3">
    <?php if ($parts): ?>
    <tr>
        <th>Part Name</th>
        <th>Part Type</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Compatibility</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($parts as $part): ?>
        <tr>
                    <td><?php echo $part['partName']; ?></td>
                    <td><?php echo $part['partTypeName']; ?></td>
                    <td><?php echo $part['brandName']; ?></td>
                    <td><?php echo $part['price']; ?></td>
                    <td><?php echo $part['compatibleWith']; ?></td>
            <td>
                <!-- Add an "Edit" button --> 
                <form method="post" action="?action=showUpdatePartForm&partID=<?= $part['partID'] ?>">
                    <!-- <input type="hidden" name="partID" value="<?= $part['partID'] ?>"> -->
                    <button type="submit" name="update">Update</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No parts found</p>
<?php endif; ?>