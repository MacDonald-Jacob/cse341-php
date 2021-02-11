    <?php $currentPage = 'Packages'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Packages</h1>
            <?php
            if (isset($message)) {
                echo $message;
            }
            if (isset($_SESSION["message"])){
                echo $_SESSION["message"];
            }
            ?>
                <?php
                    $packages1 = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID WHERE p.mediaid = 1 ORDER BY p.packageid'); 
                    echo "<h2 class ='ph2'>Photo Packages</h2>";
                    $dv1 = '<div class="container">';
                    $dv1 .= '<div class="row">';
                    foreach ($packages1 as $package1) {
                        $dv1 .= '<div class="col-sm-3 indPackage">';
                            $currency = number_format($package1['packageprice']);
                            $dv1 .= "<div id='packageImg'>";
                            // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                            $dv1 .= "<img class='img-responsive' src='$package1[packageimg]' alt='Image of" . $package1['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                            $dv1 .= "</div>";
                            $dv1 .= '<hr id="packageID">';
                            $dv1 .= "<h2>$package1[packagename]</h2>";
                            // $dv1 .= "</a>";
                            $dv1 .= "<h3><span class='formatCurrency'>$currency</span></h3>";
                            $dv1 .= "<h3>$package1[packagehours] Hours</h3>";
                            $dv1 .= "<h3>$package1[packagelocationcount] Locations(optional)</h3>";
                            $dv1 .= "<p>$package1[packagedescription]</p>";
                        $dv1 .= '</div>';
                    }
                    $dv1 .= '</div>';
                    $dv1 .= '</div>';

                    echo $dv1;
                    echo "<br><br>";

                    $packages2 = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID WHERE p.mediaid = 2 ORDER BY p.packageid'); 
                    echo "<h2 class ='ph2'>Video Packages</h2>";
                    $dv2 = '<div class="container">';
                    $dv2 .= '<div class="row">';
                    foreach ($packages2 as $package2) {
                        $dv2 .= '<div class="col-sm-3 indPackage">';
                            $currency = number_format($package2['packageprice']);
                            $dv2 .= "<div id='packageImg'>";
                            // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                            $dv2 .= "<img class='img-responsive' src='$package2[packageimg]' alt='Image of" . $package2['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                            $dv2 .= "</div>";
                            $dv2 .= '<hr id="packageID">';
                            $dv2 .= "<h2>$package2[packagename]</h2>";
                            // $dv1 .= "</a>";
                            $dv2 .= "<h3><span class='formatCurrency'>$currency</span></h3>";
                            $dv2 .= "<h3>$package2[packagehours] Hours</h3>";
                            $dv2 .= "<h3>$package2[packagelocationcount] Locations(optional)</h3>";
                            $dv2 .= "<p>$package2[packagedescription]</p>";
                        $dv2 .= '</div>';
                    }
                    $dv2 .= '</div>';
                    $dv2 .= '</div>';

                    echo $dv2;
                    echo "<br><br>";

                    $packages3 = $db->query('SELECT p.*, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID WHERE p.mediaid = 3 ORDER BY p.packageid'); 
                    echo "<h2 class ='ph2'>Photo and Video Packages</h2>";
                    $dv3 = '<div class="container">';
                    $dv3 .= '<div class="row">';
                    foreach ($packages3 as $package3) {
                        $dv3 .= '<div class="col-sm-3 indPackage">';
                            $currency = number_format($package3['packageprice']);
                            $dv3 .= "<div id='packageImg'>";
                            // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                            $dv3 .= "<img class='img-responsive' src='$package3[packageimg]' alt='Image of" . $package3['packagename'] . "on hannahmacphotography.com' id='packageImg'>";
                            $dv3 .= "</div>";
                            $dv3 .= '<hr id="packageID">';
                            $dv3 .= "<h2>$package3[packagename]</h2>";
                            // $dv1 .= "</a>";
                            $dv3 .= "<h3><span class='formatCurrency'>$currency</span></h3>";
                            $dv3 .= "<h3>$package3[packagehours] Hours</h3>";
                            $dv3 .= "<h3>$package3[packagelocationcount] Locations(optional)</h3>";
                            $dv3 .= "<p>$package3[packagedescription]</p>";
                        $dv3 .= '</div>';
                    }
                    $dv3 .= '</div>';
                    $dv3 .= '</div>';

                    echo $dv3;


            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>