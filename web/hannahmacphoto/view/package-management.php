<?php
    // Check to see if logged in. If not send to main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
    $currentPage = 'Package Management'; 

    ?><?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Package Management</h1>
            <a href= '../packages/?action=add-package' title='View the add package page'>Add Package</a>
            <h2> Update Packages</h2>
            <?php

                echo "$packageList";

            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>