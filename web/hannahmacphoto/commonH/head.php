<?php
    $homeCssLink = '<link rel="stylesheet" media="screen" href="../hannahmacphoto/css/main.css"';
    $regCssLink = '<link rel="stylesheet" media="screen" href="../css/main.css"';
    $homeScriptLink = '<script src="../hannahmacphoto/scripts/main.js"></script>';
    $regScriptLink = '<script src="../scripts/main.js"></script>';
?><!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" /> <!-- Define the character coding: preferred encoding for e-mail and web pages -->
        <meta http-equiv="x-ua-compatible" content="ie=edge" /> <!-- Latest Internet Explorer rendering mode (optional) -->
        <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Define the width of the viewport: optimize for mobile and prevent zoom/horizontal scroll -->
        <meta name="author" content="Jacob MacDonald" />
        <meta name="description" content="<?php echo $currentPage ?> page for my site" />

        <title><?php echo $currentPage ?></title>
        <?php if ($currentPage === 'Home'){
            echo $homeCssLink;
        }
        else{
            echo $regCssLink;
        }
        ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <?php if ($currentPage === 'Home'){
            echo $homeScriptLink;
        }
        else{
            echo $regScriptLink;
        }
        ?>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    </head>