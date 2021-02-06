<?php
    // Check to see if logged in. If not send to php main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
?><?php $currentPage = 'Package Management'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Add Package</h1>

        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>