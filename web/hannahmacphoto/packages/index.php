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
// Get the functions.php
require_once '../library/functions.php';

//Build links
$signIn = "<a href='../accounts/?action=login' title='View the Admin sign in page'>Admin Login</a>";
$signOut = "<a href= '../accounts/?action=logout' title='Log out'>Log Out</a>";
$addPackage = "<a href= '../packages/?action=add-package' title='View the add package page'>Add Package</a>";
$adminPage = "<a href= '../packages/?action=package-management' title='View the package management page'>Package Management</a>";
$packagePage = "<a href='../packages/?action=packages-page' title='View our Packages'>Packages</a>";


$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}

//Key Value Pair
switch ($action) {
    case 'addPackage':
         // Filter and store the data
         $mediaID = filter_input(INPUT_POST, 'mediaid', FILTER_SANITIZE_NUMBER_INT);
         $packageName = filter_input(INPUT_POST, 'packagename', FILTER_SANITIZE_STRING);
         $packagePrice = filter_input(INPUT_POST, 'packageprice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
         $packageHours = filter_input(INPUT_POST, 'packagehours', FILTER_SANITIZE_STRING);
         $packageImg = filter_input(INPUT_POST, 'packageimg', FILTER_SANITIZE_STRING);
         $packageLocationCount = filter_input(INPUT_POST, 'packagelocationcount', FILTER_SANITIZE_NUMBER_INT);
         $packageDescription = filter_input(INPUT_POST, 'packagedescription', FILTER_SANITIZE_STRING);
 
         // Check for missing data
         if(empty($mediaID) || empty($packageName) || empty($packagePrice) || empty($packageHours) || empty($packageImg) || empty($packageLocationCount) || empty($packageDescription)){
             $message = "<p class='notice'>Please provide information for all empty form fields.</p>";
             include '../view/add-package.php';
             exit; 
         }
 
         // Send the data to the model
         $packageNameOutcome = newPackage($mediaID, $packageName, $packagePrice, $packageHours, $packageImg, $packageLocationCount, $packageDescription);
 
         // Check and report the result
         if($packageNameOutcome === 1){
             $message = "<p class='notice'>Thank you. The $packageName has been added.</p>";
             include '../view/add-package.php';
             exit;
         } else {
             $message = "<p class='notice'>Sorry, but adding the $packageName failed. Please try again.</p>";
             include '../view/add-package.php';
             exit;
         }
     break;

    case 'add-package':
        include '../view/add-package.php';
    break;

    case 'updatePackage':
        $mediaID = filter_input(INPUT_POST, 'mediaid', FILTER_SANITIZE_NUMBER_INT);
        $packageName = filter_input(INPUT_POST, 'packagename', FILTER_SANITIZE_STRING);
        $packagePrice = filter_input(INPUT_POST, 'packageprice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $packageHours = filter_input(INPUT_POST, 'packagehours', FILTER_SANITIZE_STRING);
        $packageImg = filter_input(INPUT_POST, 'packageimg', FILTER_SANITIZE_STRING);
        $packageLocationCount = filter_input(INPUT_POST, 'packagelocationcount', FILTER_SANITIZE_NUMBER_INT);
        $packageDescription = filter_input(INPUT_POST, 'packagedescription', FILTER_SANITIZE_STRING);
        $packageID = filter_input(INPUT_POST, 'packageid', FILTER_SANITIZE_NUMBER_INT);

        if(empty($mediaID) || empty($packageName) || empty($packagePrice) || empty($packageHours) || empty($packageImg) || empty($packageLocationCount) || empty($packageDescription)){
            $message = "<p>Please provide information for all empty form fields.</p>";
            header('location: /hannahmacphoto/packages/?action=update-package&package_id='.urlencode($packageID));
            exit; 
        }

        $updateResult = updatePackage($mediaID, $packageName, $packagePrice, $packageHours, $packageImg, $packageLocationCount, $packageDescription, $packageID);

        // Check and report the result
        if($updateResult === 1){
            $message = "<p>Thank you. The $packageName was successfully updated.</p>";
            header('location: /hannahmacphoto/packages/');
            exit;
        } else {
            $message = "<p class='notice'>Sorry, but updating the $packageName failed. Please try again.</p>";
            include '../view/update-package.php';
            exit;
        }
    break;
    
    case 'update-package':
        include '../view/update-package.php';
    break;
    case 'package-management':
        include '../view/package-management.php';
    break;
    default:
        include '../view/packages-page.php';
}
?>