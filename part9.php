<?php
    ini_set('display_errors', 1);  // show errors for debugging

    $firstName = "Jane";  // string type variable
    $lastName = "Doe"; // string type variable
    $age = 35;  // integer type variable
    $married = true;  // boolean type variable
    $childrenNames = array("Alice", "Bob");  //array type variable

    $fullName = $firstName . " " . $lastName;  // concatenation operator
    $dogYears = $age/7;  // arithmetic operator
    $isAdult = $dogYears > 4;  // comparison operator
    $isSettled = $isAdult and $married;  // integer type variable

    function getFullName($firstName, $lastName) {    // function name
            return $firstName . " " . $lastName;   //returned value
        }
    

?>



