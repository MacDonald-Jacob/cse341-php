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
            <h1>Package Management</h1>
            <a href= '../packages/?action=add-package' title='View the add package page'>Add Package</a>

            <?php
                echo "$addPackage";
                $packages = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID ORDER BY p.packageid'); 
                echo "<h2> Update Packages</h2>";
                foreach ($packages as $package) {
                    // echo "<div>$package[packagename]</div>";
                    echo "<a href= '../packages/?action=update-package' title='View the update package page'>$package[packagename]</a><br>";
                }
            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>