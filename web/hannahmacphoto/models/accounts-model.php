<?php
/* Accounts Model */

    // Get user data based on userName
    function getUser($userName){
        $db = hannahmacphotoConnect();
        $sql = 'SELECT userID, userName, userPassword FROM hmphoto.user WHERE userID = :userID';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':userName', $userName, PDO::PARAM_STR);
        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $userData;
    }

?>