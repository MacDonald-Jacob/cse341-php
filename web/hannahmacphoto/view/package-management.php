<?php
    // Check to see if logged in. If not send to main controller
    if(!$_SESSION['loggedin']){
        header('Location: /hannahmacphoto/index.php');
    }
    $currentPage = 'Package Management'; 
    
    //Query
    $packages = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID ORDER BY p.packageid'); 

    
    ?><?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Package Management</h1>
            <a href= '../packages/?action=add-package' title='View the add package page'>Add Package</a>
            <h2> Update Packages</h2>
            <?php
                foreach ($packages as $package) {
                    $packageID = $package['packageid'];
                    $packageName = $package['packageName'];
                    echo "<a href= '../packages/?action=update-package' title='View the update package page'>$packageName</a><br>";
                }
            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>