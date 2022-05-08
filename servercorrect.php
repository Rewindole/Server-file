<DOCTYPE! HTML> 
<lang en = HTML> 

<head> 

</head> 

<body> 
    <?php

    // Student ID validation 
    if($fstudentID =="") {
        $errMsg = "<p>Error: Enter a valid student ID</p>"
    }
    else if(strlen($fstudentID)>8<10) {
        $errMsg .= "<p>Student ID must be 8 to 10 characters long</p>" 
    }

    // First name Validation 
    if ($firstname == "") { 
        $errMsg .= "<p>Error: Enter a valid first name</p>"
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $errMsg .= "<p>Error: First name must consist of alpha characters and 30 characters long</p>"
    }
    else if (strlen($firstname)<30) {
        $errMsg = "<p>Last name should be no longer then 30 characters</p>"
    }

    // last name Validation 
    if ($firstname == "") { 
         $errMsg .= "<p>Error: Enter a valid first name</p>"
    }
    else if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
        $errMsg .= "<p>Error: First name must consist of alpha characters and hyphens</p>"
    }
    else if (strlen($lastname)<30) {
        $errMsg = "<p>Error: Last name should be no longer then 30 characters</p>"
    }
?>

</body> 
