<?php
/***************************************************
*Main Controller 
****************************************************/
//Create or access a Session
session_start();

// Get the database connection file
require_once 'library/connections.php';

//Build links
$signIn = "<a href='../hannahmacphoto/accounts/?action=login' title='View the Admin sign in page'>Admin Login1</a>";
$signOut = "<a href= '../hannahmacphoto/accounts/?action=logout' title='Log out'>Log Out1</a>";
$packagePage = "<a href='../hannahmacphoto/packages/?action=packages-page' title='View our Packages'>Packages</a>";

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}




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