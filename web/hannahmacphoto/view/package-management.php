<?php
    // Check to see if logged in. If not send to php main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
?><?php $currentPage = 'Package Management'; ?>
    <?php require '../hannahmacphoto/commonH/head.php'; ?>

    <body>
        <?php require '../hannahmacphoto/commonH/header.php'; ?>
        <?php require '../hannahmacphoto/commonH/navBar.php'; ?>
        <main>
            <h1>Package Management</h1>
        </main>
        <?php require '../hannahmacphoto/commonH/footer.php'; ?>
    </body>
</html>