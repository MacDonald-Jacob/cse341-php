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
        $dataTable = '<thead>';
        $dataTable .= '<tr><th>Package Name</th><th> </th><th> </th></tr>';
        $dataTable .= '</thead>'; 
        // Set up the table body 
        $dataTable .= '<tbody>'; 
        // Iterate over all vehicles in the array and put each in a row 
        foreach ($packages as $package) {
            $packageID = $package['packageid'];
            $packageName = $package['packagename'];
            $dataTable .= "<tr><td>$packageName</td>"; 
            $dataTable .= "<td><a href= '../packages/?action=update-package&package_id=".urlencode($packageID)."' title='View the update package page'>Modify</a></td>"; 
            $dataTable .= "<td><a href= '../packages/?action=delete-package&package_id=".urlencode($packageID)."' title='View the update package page'>Delete</a></td></tr>"; 
        }
        $dataTable .= '</tbody>'; 

        return $dataTable;
    }
?>