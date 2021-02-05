<?php
// function getVehiclesByClassification($classificationName){
//     $db = phpmotorsConnect();
//     $sql = 'SELECT * FROM inventory WHERE classificationId IN (SELECT classificationId FROM carclassification WHERE classificationName = :classificationName)';
//     $stmt = $db->prepare($sql);
//     $stmt->bindValue(':classificationName', $classificationName, PDO::PARAM_STR);
//     $stmt->execute();
//     $vehicles = $stmt->fetchAll(PDO::FETCH_ASSOC);
//     $stmt->closeCursor();
//     return $vehicles;
//    }

// function getPackagesByPackageID($db){
//     $packages = $db -> query('SELECT p.* , m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID');
// return $packages;   
// }



    // // Get user packages based on service
    // function getPackageByService($service){
    //     $db = hannahmacphotoConnect();
    //     $sql = 'SELECT * FROM hmphoto.packages WHERE mediaID IN (SELECT mediaID FROM hmphoto.media WHERE service = :service)';
    //     $stmt = $db->prepare($sql);
    //     $stmt->bindValue(':service', $service, PDO::PARAM_STR);
    //     $stmt->execute();
    //     $packages = $stmt->fetchALL(PDO::FETCH_ASSOC);
    //     $stmt->closeCursor();
    //     return $packages;
    // }
   

//Get package information
// function getPackagesByService(){
//         $db = hannahmacphotoConnect();
//         $sql = 'SELECT p.* , m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID';
//         $stmt = $db->prepare($sql);
//         $stmt->bindValue(':service', $service, PDO::PARAM_STR);
//         $stmt->execute();
//         $packages = $stmt->fetchALL(PDO::FETCH_ASSOC);
//         $stmt->closeCursor();
//         return $packages;
//     }

// function getPackagesByService(){
//     $dbc = hannahmacphotoConnect();
//     $sql = 'SELECT p.* , m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID';
//     $stmt = $db->prepare($sql);
//     $stmt->bindValue(':service', $service, PDO::PARAM_STR);
//     $stmt->execute();
//     $packages = $stmt->fetchALL(PDO::FETCH_ASSOC);
//     $stmt->closeCursor();
//     return $packages;
// }

?>