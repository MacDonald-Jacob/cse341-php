<?php
/***************************************************
*Main Controller 
****************************************************/
//Not working. Need to figure this out.

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
 $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
}


switch($action){
  default:
  header('Location: view/aboutMe.php');
}

?>