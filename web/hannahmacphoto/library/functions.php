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


    //Build a display of vehicles within an unordered list.
function buildPackagesDisplay($packages){
    $dv = '<ul id="package-display">';
    foreach ($packages as $package) {
        $currency = number_format("$package[packagePrice]");
        $dv .= '<li>';
        $dv .= "<div id='packageImg'>";
        // $dv .= "<a href='/hannahmacphoto/packages/?action=individualPackage.php' title='View the individual package page.'>";
        $dv .= "<img src='$package[packageImg]' alt='Image of $package[packageName] on hannahmacphotography.com'>";
        $dv .= "</div>";
        $dv .= '<hr id="packageID">';
        $dv .= "<h2>$package[packageName]</h2>";
        $dv .= "</a>";
        $dv .= "<span class='formatCurrency'>$currency</span>";
        $dv .= '</li>';
    }
        $dv .= '</ul>';
        return $dv;
    }

?>