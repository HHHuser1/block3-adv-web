


<?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
?>



<!-- views/parts_show.php -->

<h2>.... PARTS ....</h2>
<table border="3">
    
    <?php if ($parts): ?>
    <tr>
        <th>Part ID</th>
        <th>Part Name</th>
        <th>Part Type</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Compatibility</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($parts as $part): ?>
        <tr>
                    <td><?php echo $part['partID']; ?></td>
                    <td><?php echo $part['partName']; ?></td>
                    <td><?php echo $part['partTypeName']; ?></td>
                    <td><?php echo $part['brandName']; ?></td>
                    <td><?php echo $part['price']; ?></td>
                    <td><?php echo $part['compatibleWith']; ?></td>
            <td>
                <!-- Add an "Edit" button --> 
                <form class="table-edit-form" method="post" action="?action=showUpdatePartForm&partID=<?= $part['partID'] ?>">
                    <!-- <input type="hidden" name="partID" value="<?= $part['partID'] ?>"> -->
                    <button type="submit" name="update">Update</button>
                </form>

                <form class="table-edit-form" method="post" action="?action=confirmDeletePart&partID=<?= $part['partID'] ?>">
                    <!-- <input type="hidden" name="partID" value="<?= $part['partID'] ?>"> -->
                    <button type="submit" name="delete" >Delete</button>
                </form>

                <!-- <form method="post" action="?action=deletePart&partID=<?php echo $part['partID'] ?>">
                    <input type="hidden" name="action" value="deletePart">
                    <input type="hidden" name="partID" value="<?php echo $part['partID'] ?>">
                    <button type="submit" name="delete">Delete</button>
                </form> -->
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>No parts found</p>
<?php endif; ?>