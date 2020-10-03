<?php
    declare(strict_types = 1);
    // Including automatical loader
    include 'includes/autoloader.inc.php';
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $person1 = new Person("Murat2", "Coly", 25);

    try {
        $person1->setName("MAHMUT", "Coly");
        echo $person1->getName();
        // $e is an build in variable for errors.
    } catch(TypeError $e){
        echo "Error!:". $e->getMessage();
    }


    ?>
</body>
</html>