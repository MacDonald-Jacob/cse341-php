    <?php $currentPage = 'Packages'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Packages</h1>
            <?php
                $packages = $db->query('SELECT p.packageName, p.packageImg, p.packagePrice, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID'); 
                $dv = '<ul id="package-display">';
                foreach ($packages as $package) {
                    echo $package['packageName'];
                    echo $package["packagePrice"];
                    $currency = number_format($package['packagePrice']);
                    $dv .= '<li>';
                    $dv .= "<div id='packageImg'>";
                    // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                    $dv .= "<img src='$package[packageImg]' alt='Image of" . $package['packageName'] . "on hannahmacphotography.com'>";
                    $dv .= "</div>";
                    $dv .= '<hr id="packageID">';
                    $dv .= "<h2>$package[packageName]</h2>";
                    $dv .= "</a>";
                    $dv .= "<span class='formatCurrency'>$currency</span>";
                    $dv .= '</li>';
                }
                    $dv .= '</ul>';

                    echo $dv;
            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>