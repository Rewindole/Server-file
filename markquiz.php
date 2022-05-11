<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Mark Quiz</title>
        <meta name="description"    content="markquiz" />
        <meta name="keywords"   content="PHP,HTML" />
        <meta name="author"     content="Luan Nguyen" />
    </head>
    <body>
        <?php
        
        //sanitise input
        function sanitise_input($data) 
        {$data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;}
        
            /// ID, Name Validation Sectio
    // Student ID validation 
    if($fstudentID =="") {
        $errMsg = "<p>Error: Enter a valid student ID</p>"
    }
    else if(strlen($fstudentID)<10) {
        $fstudentID = (substr($fstudentID, 8, 10))
        $errMsg .= "<p>Error: Student ID must be 8 to 10 ch aracters long</p>" 
    }

    // First name Validation 
    if ($firstname == "") { 
        $errMsg .= "<p>Error: Enter a valid first name</p>"
    }
    else if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $errMsg .= "<p>Error: First name must consist of alpha characters and 30 characters long</p>"
    }
    else if (strlen($firstname)<30) {
        $errMsg = "<p>Error: Last name should be no longer then 30 characters</p>"
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
        
        //anwers
        $anw1 ="Charles Goldfarb, Edward Mosher, and Raymond Lorie";
        $anw2 ="Elements and tags";
        $anw3 ="Human and machine-readable";
        //score
        $score = 0
        //text question
        if (isset ($_POST["q1"])) {
            $q1 = $_POST["q1"];
        }
        if (isset ($_POST["q2"])) {
            $q1 = $_POST["q2"];
        }
        if (isset ($_POST["q3"])) {
            $q1 = $_POST["q3"];
        }
        if (isset ($_POST["q4"])) {
            $q1 = $_POST["q4"];
        }
        if (isset ($_POST["q5"])) {
            $q1 = $_POST["q5"];
        }
        if (isset ($_POST["q6"])) {
            $q1 = $_POST["q6"];
        }
        if (isset ($_POST["q7"])) {
            $q1 = $_POST["q7"];
        }
        //
        if ($q1== "" ||$q2== "" ||$q3== "" ||$q4== "" ||$q5== "" ||$q6== "" ||$q7== "" ||) {
            echo "<p>Please filling all the blank</p>";
        }
        // Q1
        if(!strcasecamp($q1, $anw1)) {
            $score++;
        }
        else $score = $score + 0;
        //Q2
        if(!strcasecamp($q2, $anw2)) {
            $score++;
        }
        else $score = $score + 0;
        //Q3
        if(!strcasecamp($q3, $anw3)) {
            $score++;
        }
        else $score = $score + 0;
        //multiple choice
        if($q4 == 2) {
            $score++;
        }
        else $score = $score + 0;
       // check boxes
        if ($q5 == "1") {$score = $score + 0;}
        if ($q5 == "2") {$score = $score + 0;}
        if ($q5 == "3") {$score = $score + 0;}
        if ($q5 == "4") {$score = $score + 0;}
        if ($q5 == "5") {$score++;}
        if ($q5 == "6") {$score++;}
        if ($q5 == "7") {$score = $score + 0;}
        // multiple choice text
        if ($q6 == "2") {score++;}
        else($score = $score + 0;)
        // text box
        $keyphrase1 = "elements in a hierarchal manner";
        $keyphrase2_1 = "use elements and tags ";
        //define
        if (isset ($_POST["fname"])) {
            $fname = $_POST["fname"];
        }
        if (isset ($_POST["lname"])) {
            $flastname = $_POST["lname"];
        }
        if (isset ($_POST["studentID"])) {
            $fstudentID = $_POST["studentID"];
        }
        $datetime = date("Y-m-d h:i:sa");
        // connect mySQL
        $host = "https://feenix-mariadb-web.swin.edu.au"
        $user = "s103812143"
        $pwd = "011003"
        $sql_db = "s103812143_db"
        $dbconn= @mysqli_connect($host,$user,$pwd,$sql_db);
        if ($dbconn) {
            $query ="SELECT STUDENT_NUMBER, ATTEMPT_NUMBER
                     FROM  ATTEMPTS
                     WHERE STUDENT_NUMBER=$studentID;"
            $result = mysqli_query($dbconn, $query);
            if ($result) echo 
        }
        ?>
        </body>
        
