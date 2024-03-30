<?php
$firstname = $email = $gender = $dob = "";
$firstname_err = $email_err = $gender_err = $dob_err = "";

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (empty($_POST["firstname"])) {
        $firstname_err = "Name cannot be empty";
    } else {
        $firstname = sanitize_input($_POST["firstname"]);
        
        $name_words = explode(" ", $firstname);
        if (count($name_words) < 2) {
            $firstname_err = "Name must contain at least two words";
        }
        
        elseif (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $firstname)) {
            $firstname_err = "Invalid name format";
        }
    }

    
    if (empty($_POST["email"])) {
        $email_err = "Email cannot be empty";
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
        }
    }

    
    if (empty($_POST["gender"])) {
        $gender_err = "Gender is required";
    } else {
        $gender = sanitize_input($_POST["gender"]);
    }

   
    if (empty($_POST["dob"])) {
        $dob_err = "Date of Birth cannot be empty";
    } else {
        $dob = sanitize_input($_POST["dob"]);
       
        if (!preg_match("/^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-(19|20)[0-9]{2}$/", $dob)) {
            $dob_err = "Invalid date of birth format";
        }
    }
}


if ($firstname_err || $email_err || $gender_err || $dob_err) {
    echo "Form submission unsuccessful. Please correct the following errors:<br>";
    echo "- " . $firstname_err . "<br>";
    echo "- " . $email_err . "<br>";
    echo "- " . $gender_err . "<br>";
    echo "- " . $dob_err . "<br>";
} else {
    echo "Form submitted successfully!";
   
}
?>
