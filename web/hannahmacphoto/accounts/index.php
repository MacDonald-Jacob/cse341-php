<?php
/***************************************************
*Accounts Controller
****************************************************/
// Create or access a Session
session_start();

// Get the database connection file
require_once '../library/connections.php';
// Get the accounts-model
require_once '../models/accounts-model.php';
// Get the functions.php
require_once '../library/functions.php';

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
    //submits the login data
    case 'Login':
        // Filter and store the data inputs into variables and validate variable using custom functions from functions.php file.
        $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
        $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);
        // $userName = checkUserName($userName);
 
        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

        // Check if variables are empty. If they are send a message and call the view using a php include function so the error message is displayed in the view.
        if(empty($userName) || empty($userPassword)){
            $message = '<p class="notice">Please provide information for all empty form fields.</p>';
            include '../view/login.php';
            exit; 
        }

        // A valid password exists, proceed with the login process
        // Query the client data based on userID
        $userData = getUser($userName);

        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

        // Compare the password just submitted against
        // the hashed password for the matching client
        $hashCheck = password_verify($userPassword, $userData['userpassword']);
        
        // If the hashes don't match create an error
        // and return to the login view
        if(!$hashCheck) {
            $message = '<p class="notice">Please check your password and try again. </p>';
            include '../view/login.php';
        exit;
        }
        
        // A valid user exists, log them in
        $_SESSION['loggedin'] = TRUE;
        
        // Remove the password from the array
        // the array_pop function removes the last
        // element from an array
        array_pop($userData);
        
        // Store the array into the session
        $_SESSION['userData'] = $userData;
        
        // Send them to the admin view
        include '../view/package-management.php';
        exit;
    break;
    case 'login':
        include '../view/login.php';
    break;
    
    //delivers the login view
    case 'logout':
        //Destroy session
        session_destroy();
        //send home
        include '../view/login.php'; 
    break;
    
    default:
        include '../view/login.php';
}
?>