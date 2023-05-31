<?php
require_once __DIR__ . '/database/db.php';

var_dump($arrayFilm[0]->genres)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>
<body>
    <div>
        <?php foreach($arrayFilm as $element) ?>
            <h1>
                <?php echo $element->title ?>
            </h1>
            <span>
                <?php echo 'anno: '.$element->year ?>
            </span>
            <span>
                <?php echo $element->time.' minutes'?>
            </span>
            <p>
                <?php foreach($element->genres as $element) 
                    echo $element->genres
                ?>
            </p>
    </div>
    
</body>
</html>