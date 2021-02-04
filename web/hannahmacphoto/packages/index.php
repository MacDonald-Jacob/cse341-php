<?php
/***************************************************
*Package Controller
****************************************************/
// Create or access a Session
// session_start();

// Get the database connection file
// require_once '../library/connections.php';

// $signIn = "<a href='/phpmotors/accounts/index.php?action=login' title='View the PHP Motors sign in page'>My Account</a>";
// $signOut = "<a href= '/phpmotors/accounts/index.php?action=logout' title='View the PHP Motors logout page'>Log Out</a>";


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

//Key Value Pair
switch ($action) {
    case 'packageManagement':
        include '../view/package-management.php';
    break;
    default:
        include '../view/packages-page.php';
}
?>