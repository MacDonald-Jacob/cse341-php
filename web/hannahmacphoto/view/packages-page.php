    <?php $currentPage = 'Packages'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Packages</h1>
<img src="" alt="">
                <?php
                // $statement = $db->prepare('SELECT p.packageName, p.packageImg, p.packagePrice, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID');
                // $statement->execute();
                // //Go through each result
                // while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                // {
                //     echo "<div><b>" . $row['packagename'] . " " . $row['packageimg'] . ":" . $row['packageprice'] . "</b> - \"" . $row['service'] . "\"</div>";
                //     echo " <img src='$row[packageimg]'>";
                // }



                $packages = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID ORDER BY p.mediaid, p.packageid'); 
                $dv = '<ul id="package-display">';
                foreach ($packages as $package) {
                    $currency = number_format($package['packageprice']);
                    $dv .= '<li>';
                    $dv .= "<div id='packageImg'>";
                    // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                    $dv .= "<img src='$package[packageimg]' alt='Image of" . $package['packagename'] . "on hannahmacphotography.com'>";
                    $dv .= "</div>";
                    $dv .= '<hr id="packageID">';
                    $dv .= "<h2>$package[packagename]</h2>";
                    // $dv .= "</a>";
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