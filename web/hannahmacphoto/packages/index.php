<?php
/***************************************************
*Package Controller
****************************************************/
// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
// Get the vehicle model.
require_once '../models/package-model.php';

//Build links
$signIn = "<a href='../accounts/?action=login' title='View the Admin sign in page'>Admin Login</a>";
$signOut = "<a href= '../accounts/?action=logout' title='Log out'>Log Out</a>";
$addPackage = "<a href= '../packages/?action=add-package' title='View the add package page'>Add Package</a>";

$packagePage = "<a href='../packages/?action=packages-page' title='View our Packages'>Packages</a>";

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

//Key Value Pair
switch ($action) {
    case 'add-package':
        include '../view/add-package.php';
    break;
    case 'packageManagement':
        include '../view/package-management.php';
    break;
    default:
        include '../view/packages-page.php';
}
?>