<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC with MySQL</title>
</head>
<body>
    <h1>MVC and mySQL</h1>
    <?php
        include_once("controllers/controller.php");
        
        $controller = new Controller($connection2);

        // if page gets information, add it 
        // otherwise show the form
        if(isset($_POST['submit'])){
            $controller->add();
        } else {
            $controller->showForm();
        }
        $controller->showUsers();
    ?>
</body>
</html>
