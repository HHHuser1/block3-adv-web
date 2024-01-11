<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>
<!-- views/compatibility_show.php -->
<h2>Compatibility</h2>

<table border="3">
    <tr>
        <th>compatibility</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($compatibility as $compatibility): ?>
        <tr>
            <td><?= $compatibility['compatibleWith'] ?></td>
            <td>
                <!-- Add an "Edit" button -->
                <form method="post" action="?action=showUpdateCompatibilityForm&compatibilityID=<?= $compatibility['compatibilityID'] ?>">
                    <input type="hidden" name="compatibilityID" value="<?= $compatibility['compatibilityID'] ?>">
                    <button type="submit" name="update">Update</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
