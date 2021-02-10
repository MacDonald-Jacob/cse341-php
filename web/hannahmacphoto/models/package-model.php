<?php
function getPackages()
{
    $db = hannahmacphotoConnect();
    $packages = $db->query('SELECT p.packageid, p.packagename, m.service FROM hmphoto.packages p LEFT JOIN hmphoto.media m ON p.mediaID = m.mediaID ORDER BY p.packageid'); 
return $packages;
}


?>