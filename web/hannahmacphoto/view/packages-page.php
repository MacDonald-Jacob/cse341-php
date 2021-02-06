    <?php $currentPage = 'Packages'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Packages</h1>
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
                    $dv .= "<img src='$package[packageimg]' alt='Image of" . $package['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                    $dv .= "</div>";
                    $dv .= '<hr id="packageID">';
                    $dv .= "<h2>$package[packagename]</h2>";
                    // $dv .= "</a>";
                    $dv .= "<span class='formatCurrency'>$currency</span>";
                    $dv .= '</li>';
                }
                    $dv .= '</ul>';

                    echo $dv;








                    $packages1 = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID WHERE p.mediaid = 1 ORDER BY p.packageid'); 
                    // $dv1 = '<ul id="package-display">';
                    // foreach ($packages as $package) {
                    //     $currency = number_format($package['packageprice']);
                    //     $dv .= '<li>';
                    //     $dv .= "<div id='packageImg'>";
                    //     // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                    //     $dv .= "<img src='$package[packageimg]' alt='Image of" . $package['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                    //     $dv .= "</div>";
                    //     $dv .= '<hr id="packageID">';
                    //     $dv .= "<h2>$package[packagename]</h2>";
                    //     // $dv .= "</a>";
                    //     $dv .= "<span class='formatCurrency'>$currency</span>";
                    //     $dv .= '</li>';
                    // }
                    //     $dv .= '</ul>';
    
                    //     echo $dv;


                    // $dv1 = '<ul id="package-display">';
                    foreach ($packages1 as $package) {
                        $dv1 = '<div class="container">';
                            $dv1 .= '<div class="row">';
                                $dv1 .= '<div class="col-sm-3">';
                                    $currency = number_format($package['packageprice']);
                                    // $dv1 .= '<li>';
                                    $dv1 .= "<div id='packageImg'>";
                                    // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                                    $dv1 .= "<img class='img-responsive' src='$package[packageimg]' alt='Image of" . $package['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                                    $dv1 .= "</div>";
                                    $dv1 .= '<hr id="packageID">';
                                    $dv1 .= "<h2>$package[packagename]</h2>";
                                    // $dv1 .= "</a>";
                                    $dv1 .= "<span class='formatCurrency'>$currency</span>";
                                    // $dv1 .= '</li>';
                                $dv1 .= '</div>';
                            $dv1 .= '</div>';
                        $dv1 .= '</div>';
                    }
                    // $dv1 .= '</ul>';

                    echo $dv1;


            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>