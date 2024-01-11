<?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
?>

<!-- views/brands_show.php -->
<!-- <h2>Brands List:</h2>
    <ul>
    <?php foreach ($brands as $brand): ?>
        <div class="brands">
        
            <li><?= $brand['brandName'] ?>
            <form method="post" action="?action=showUpdateBrandForm&brandID=<?= $brand['brandID'] ?>">
                <input type="hidden" name="brandID" value="<?= $brand['brandID'] ?>">
                <button type="submit" name="update">Update</button>
            </form>
            </li>

        </div>
    
    <?php endforeach; ?>
    </ul> -->


<!-- views/brands_show.php -->
<h2>Brands</h2>

<table border="3">
    <tr>
        <th>Brand Name</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($brands as $brand): ?>
        <tr>
            <td><?= $brand['brandName'] ?></td>
            <td>
                <form method="post" action="?action=showUpdateBrandForm&brandID=<?= $brand['brandID'] ?>">
                    <input type="hidden" name="brandID" value="<?= $brand['brandID'] ?>">
                    <button type="submit" name="update">Update</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


