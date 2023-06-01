<?php
require __DIR__ .'/../../database/db.php';
?>

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