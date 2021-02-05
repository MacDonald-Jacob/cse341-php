<?php
//a custom functon to check that the password meets the format requirement that we added to our HTML form: 
//at least 8 characters, at least 1 capital letter, at least 1 number and at least 1 special character.
    function checkPassword($userPassword){
        $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';
        return preg_match($pattern, $userPassword);
    }

?>