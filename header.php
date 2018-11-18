<?php
    require_once( dirname( __FILE__ ) . '/functions.php' );
    $articleTitle = "This is the title of the first project feature";
    $subTitle = "This project is just for sample purposes only"
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once( 'head.php'); ?>
    </head>
    <body>
        <header style="background-image: url(img/dvd.jpg); background-size: 50%;">
                <span id="articleTitle">
                    <?php echo $articleTitle; ?> 
                </span>
                
                <span id="subTitle">
                    <?php echo $subTitle; ?>
                </span>
                
        </header>
        
    </body>
</html>