

<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/parttypes_show.php -->
<h2>.... PART TYPES ....</h2>

<table border="3">
    <tr>
        <th>Part Type Name</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($partTypes as $partType): ?>
        <tr>
            <td><?= $partType['partTypeName'] ?></td>
            <td>
                <!-- Add an "Edit" button -->
                <form class="table-edit-form" method="post" action="?action=showUpdatePartTypeForm&partTypeID=<?= $partType['partTypeNameID'] ?>">
                    <input type="hidden" name="partTypeID" value="<?= $partType['partTypeNameID'] ?>">
                    <button type="submit" name="update">Update</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>




