<?php
//function to get packages
function getPackages()
{
    $db = hannahmacphotoConnect();
    $packages = $db->query('SELECT p.packageid, p.packagename, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID ORDER BY p.packageid'); 
return $packages;
}

// Get package information by packageid
function getPackageInfo($packageID){
    $db = hannahmacphotoConnect();
    $sql = 'SELECT * FROM hmphoto.packages WHERE packageid = :packageid';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':packageid', $packageID, PDO::PARAM_INT);
    $stmt->execute();
    $packageInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $packageInfo;
   }

// New Package
function newPackage($mediaID, $packageName, $packagePrice, $packageHours, $packageImg, $packageLocationCount, $packageDescription){
    // Create a connection object using the hannahmacphoto connection function from the connections.php file.
    $db = hannahmacphotoConnect();
    // The SQL statement
    $sql = 'INSERT INTO hmphoto.packages (mediaid, packagename, packageprice, packagehours, packageimg, packagelocationcount, packagedescription)
        VALUES (:mediaid, :packagename, :packageprice, :packagehours, :packageimg, :packagelocationcount, :packagedescription)';
    // Create the prepared statement using the hannahmacphoto connection
    $stmt = $db->prepare($sql);
    // Replace the placeholders in the SQL statement with the actual values in the variables and tell the database the type of data it is
    $stmt->bindValue(':mediaid', $mediaID, PDO::PARAM_INT);
    $stmt->bindValue(':packagename', $packageName, PDO::PARAM_STR);
    $stmt->bindValue(':packageprice', $packagePrice, PDO::PARAM_INT);
    $stmt->bindValue(':packagehours', $packageHours, PDO::PARAM_STR);
    $stmt->bindValue(':packageimg', $packageImg, PDO::PARAM_STR);
    $stmt->bindValue(':packagelocationcount', $packageLocationCount, PDO::PARAM_INT);
    $stmt->bindValue(':packagedescription', $packageDescription, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert.
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction.
    $stmt->closeCursor();
    // Return the indication of success (rows changed).
    return $rowsChanged;
}


// Update Package
function updatePackage($mediaID, $packageName, $packagePrice, $packageHours, $packageImg, $packageLocationCount, $packageDescription, $packageID){
    $db = hannahmacphotoConnect();
    $sql = 'UPDATE hmphoto.packages SET mediaid = :mediaid, packagename = :packagename, packageprice = :packageprice, packagehours = :packagehours, packageimg = :packageimg, packagelocationcount = :packagelocationcount, packagedescription = :packagedescription WHERE packageid = :packageid';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':mediaid', $mediaID, PDO::PARAM_INT);
    $stmt->bindValue(':packagename', $packageName, PDO::PARAM_STR);
    $stmt->bindValue(':packageprice', $packagePrice, PDO::PARAM_INT);
    $stmt->bindValue(':packagehours', $packageHours, PDO::PARAM_STR);
    $stmt->bindValue(':packageimg', $packageImg, PDO::PARAM_STR);
    $stmt->bindValue(':packagelocationcount', $packageLocationCount, PDO::PARAM_INT);
    $stmt->bindValue(':packagedescription', $packageDescription, PDO::PARAM_STR);
    $stmt->bindValue(':packageid', $packageID, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}

// Delete Package
function deletePackage($packageID){
    $db = hannahmacphotoConnect();
    $sql = 'DELETE FROM hmphoto.packages WHERE packageid = :packageid';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':packageid', $packageID, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
    return $rowsChanged;
}
?>