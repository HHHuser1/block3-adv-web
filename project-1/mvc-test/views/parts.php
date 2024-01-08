


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parts</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 6px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        
        
    </style>
</head>
<body>
    <h2>.... PARTS ....</h2>

    <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
    ?>
    <?php if ($parts): ?>
        <table>
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
    <?php endif; ?>
</body>
</html>

