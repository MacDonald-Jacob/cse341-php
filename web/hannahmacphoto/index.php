<?php
/***************************************************
*Main Controller 
****************************************************/
//Create or access a Session
session_start();

// Get the database connection file
// require_once 'library/connections.php';

//Build links
$signIn = "<a href='/hannahmacphoto/accounts/index.php?action=login' title='View the PHP Motors sign in page'>My Account</a>";
$signOut = "<a href= '/hannahmacphoto/accounts/index.php?action=logout' title='View the PHP Motors logout page'>Log Out</a>";
$packagePage = "<a href='../hannahmacphoto/packages/?action=packages-page' title='View our Packages'>Packages</a>";

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

// Check if the firstname cookie exists, get its value
// if(isset($_COOKIE['firstname'])){
//     $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
// }


//Key Value Pair
switch ($action) {
    case 'template':
        include 'view/template.php';
    break;
    default:
        include 'view/home.php';
        // header('Location: view/home.php');

}
?>