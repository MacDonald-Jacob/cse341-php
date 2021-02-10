<?php

//It will check the value of the $userName variable, after having been sanitized, to see if it "looks" like a valid userName. 
function checkUserName($userName){
    $valUserName = filter_var($userName, FILTER_VALIDATE_EMAIL);
    return $valUserName;
}

//a custom functon to check that the password meets the format requirement that we added to our HTML form: 
//at least 8 characters, at least 1 capital letter, at least 1 number and at least 1 special character.
    function checkPassword($userPassword){
        $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
        return preg_match($pattern, $userPassword);
    }


    function buildPackagesList($packages){
        foreach ($packages as $package) {
            $packageID = $package['packageid'];
            $packageName = $package['packagename'];
            echo "<a href= '../packages/?action=update-package&package_name=".urlencode($packageName)."' title='View the update package page'>$packageName</a><br>";
        }
    }

?>