<?php
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

    $person01 = new Person("Murat", "Coly", 24);
    echo $person01->last;
    echo $person01->setName("Maho", "Coly");

    ?>
</body>
</html>