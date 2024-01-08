
<h2>....BRANDS....</h2>

<?php
if ($users) {
    foreach ($users as $user) {
        echo 'BrandID:'.$user['brandID'] .' | '. 'Brand Name: ' . $user['brandName'] .' | '. ' Country of Origin: ' . $user['countryOfOrigin'] . ' ' . '<br>';

        // echo "<form method='post' action=''>
        //         <input type='hidden' name='brandID' value='{$user['brandID']}'>
        //         <input type='submit' name='edit' value='Edit'>
        //         <button type='submit' name='confirmDelete' value='{$user['brandID']}'>Delete</button>
        //       </form>";
        echo "<form method='post' action='?action=showEditForm&brandID={$user['brandID']}'>
                <input type='hidden' name='brandID' value='{$user['brandID']}'>
                <input type='submit' name='edit' value='Edit'>
              </form>";
    }
} else {
    echo "<p>No brands found</p>"; // 'No brands found';
}
    echo "<p><a href='./index.php'>Home</a></p>";
?>
