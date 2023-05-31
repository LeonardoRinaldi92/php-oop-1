<?php
require_once __DIR__ . '/database/db.php';

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
        <?php foreach($arrayFilm as $element){?>
            <?php foreach($element->title as $elementINelement){?>
                <h1 style="margin-top: 40px">
                    <?php echo $elementINelement->title ?>
                </h1>
                <h3>
                    <?php echo'Titolo originale: '. $elementINelement->OriginalTitle ?>
                </h3>
                <p>
                </p>
                <span>
                    <?php echo'"<i>'. $elementINelement->desc.'</i>"' ?>
                </span>
            <?php } ?>

            <p>
                <?php echo 'anno:'. $element->year ?>
            </p>
            <p>
                <?php echo 'duarata '.$element->time.' min.'?>
            </p>
            <p>
                    Genere: 
                <?php foreach($element->genres as $element){?>
                    <?php echo $element ?>
                <?php } ?>
                
            </p>
        <?php } ?>
    </div>
    
</body>
</html>