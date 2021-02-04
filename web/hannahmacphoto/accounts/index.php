<?php
/***************************************************
*Accounts Controller
****************************************************/
// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';

// Build a link 
$signIn = "<a href='../accounts/?action=login' title='View the Admin sign in page'>Admin Login</a>";
$signOut = "<a href= '../accounts/?action=logout' title='Log out'>Log Out</a>";
$packagePage = "<a href='../packages/?action=packages-page' title='View our Packages'>Packages</a>";


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}



//Key Value Pair
switch ($action) {
    case 'login':
        include '../view/login.php';
    break;
    default:
        include '../view/login.php';
}
?>