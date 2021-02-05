    <?php $currentPage = 'Packages'; ?>
    <?php require '../commonH/head.php'; ?>

    <body>
        <?php require '../commonH/header.php'; ?>
        <?php require '../commonH/navBar.php'; ?>
        <main>
            <h1>Packages</h1>
            <?php
             try {
                $sql = 'SELECT p.packageName, p.packageImg, p.packagePrice, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID';
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stmt->closeCursor();
            
                foreach ($rows as $row){
                    echo "$row[packagePrice]";
                }
            } catch (PDOException $e) {echo $e;}
            
                // $packages = $db->query('SELECT p.packageName, p.packageImg, p.packagePrice, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID', PDO::FETCH_ASSOC); 
                // $dv = '<ul id="package-display">';
                // foreach ($packages as $package) {
                // //     $currency = number_format($package['packagePrice']);
                // //     $dv .= '<li>';
                // //     $dv .= "<div id='packageImg'>";
                // //     // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
                // //     $dv .= "<img src='$package[packageImg]' alt='Image of $package[packageName] on hannahmacphotography.com'>";
                // //     $dv .= "</div>";
                // //     $dv .= '<hr id="packageID">';
                // //     $dv .= "<h2>$package[packageName]</h2>";
                // //     $dv .= "</a>";
                // //     $dv .= "<span class='formatCurrency'>$currency</span>";
                // //     $dv .= '</li>';
                // // }
                // //     $dv .= '</ul>';

                // //     echo $dv;
            ?>
        </main>
        <?php require '../commonH/footer.php'; ?>
    </body>
</html>