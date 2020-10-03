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

    try {
        $person1->setName(2);
        echo $person1->getName()
    } catch{

    }

    ?>
</body>
</html>